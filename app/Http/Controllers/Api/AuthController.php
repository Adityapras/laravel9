<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\User;
use App\Helper\Rules;
use App\Mail\VerifyOtp;
use App\Mail\VerifyEmail;
use App\Helper\ApiResponse;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use App\Mail\VerifyForgotPassword;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    use ApiResponse, Rules;

    public function register(Request $request)
    {
        $validateData = $this->validateData($request, $this->registerRules());
        if ($validateData->fails()) {
            return $this->error($validateData->errors(), 'BAD_REQUEST', 'Error', 400);
        }

        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email
        ]);

        if ($user) {
            $checkEmail = PasswordReset::where(['email' => $request->email]);
            if ($checkEmail) {
                $checkEmail->delete();
            }
            $mailToken = Hash::make($request->email);
            $verifyCode = url('/verify?token=' . $mailToken);
            PasswordReset::create([
                'email' => $request->email,
                'token' =>  $mailToken,
                'created_at' => Carbon::now()
            ]);
        }

        Mail::to($request->email)->send(new VerifyEmail($verifyCode));

        return $this->success([
            'token' => $user->createToken('UserApiToken', ['user-api'])->plainTextToken,
            'message' => 'Successful created user. Please check your email for activation code to verify your email'
        ]);
    }

    public function login(Request $request)
    {
        $validateData = $this->validateData($request, $this->loginRules());
        if ($validateData->fails()) {
            return $this->error($validateData->errors(), 'BAD_REQUEST', 'Error', 400);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return $this->error(new MessageBag(['password' => ['Email and/or password invalid.']]), 'Unauthenticated', 'Error', 401);
        }

        if ($request->user()->email_verified_at === null || $request->user()->user_status == 'inactive') {
            return $this->error('Please verify your email to activated account', 'BAD_REQUEST', 'Error', 401);
        }

        $checkEmail = PasswordReset::where(['email' => $request->email]);
        if ($checkEmail) {
            $checkEmail->delete();
        }

        $userOtp = rand(100000, 999999);

        PasswordReset::create([
            'email' => $request->email,
            'token' =>  $userOtp,
            'created_at' => Carbon::now()
        ]);

        Mail::to($request->email)->send(new VerifyOtp($userOtp));

        return $this->success([
            'token' => $request->user()->createToken('UserApiToken', ['user-api'])->plainTextToken,
        ], 'OK', 'Please check your email for OTP code');
    }

    public function verifyUserEmailActivation(Request $request)
    {
        $validateData = $this->validateData($request, ['token' => ['required']]);
        if ($validateData->fails()) {
            return $this->error($validateData->errors(), 'BAD_REQUEST', 'Error', 400);
        }

        $check  = PasswordReset::where([
            ['email', '=', $request->email],
            ['token', '=', $request->token],
        ]);

        if ($check->get()->isEmpty()) {
            return $this->error('Invalid token / User has been active', 'BAD_REQUEST', 'Error', 400);
        }

        User::where('email', $request->email)->update([
            'email_verified_at' => Carbon::now(),
            'user_status' => 'active'
        ]);

        PasswordReset::where([
            ['email', '=', $request->email],
            ['token', '=', $request->token],
        ])->delete();

        return $this->success(null, 'OK', 'account has been activated');
    }

    public function verifyOtpCode(Request $request)
    {
        $validateData = $this->validateData($request, ['token' => ['required']]);
        if ($validateData->fails()) {
            return $this->error($validateData->errors(), 'BAD_REQUEST', 'Error', 400);
        }

        $check  = PasswordReset::where([
            ['email', '=', $request->email],
            ['token', '=', $request->token],
        ]);

        if ($check->get()->isEmpty()) {
            return $this->error('Invalid token / User has been active', 'BAD_REQUEST', 'Error', 400);
        }

        User::where('email', $request->email)->update([
            'otp_verified_at' => Carbon::now()
        ]);

        PasswordReset::where([
            ['email', '=', $request->email],
            ['token', '=', $request->token],
        ])->delete();

        return $this->success($request->user(), 'OK', 'login success');
    }

    public function forgotPassword(Request $request)
    {
        $validateData = $this->validateData($request, ['email' => ['required', 'string', 'email', 'max:255']]);
        if ($validateData->fails()) {
            return $this->error($validateData->errors(), 'BAD_REQUEST', 'Error', 400);
        }

        $verifyEmail = User::where('email', $request->email);

        if ($verifyEmail->get()->isEmpty()) {
            return $this->error('email not found', 'BAD_REQUEST', 'Error', 404);
        }

        $check  = PasswordReset::where([
            ['email', '=', $request->email]
        ]);

        if (!$check->get()->isEmpty()) {
            $check->delete();
        }

        $mailToken = Hash::make($request->email);
        $verifyCode = url('/reset-password?token=' . $mailToken . '&email=' . $request->email);
        PasswordReset::create([
            'email' => $request->email,
            'token' =>  $mailToken,
            'created_at' => Carbon::now()
        ]);

        Mail::to($request->email)->send(new VerifyForgotPassword($verifyCode));
        return $this->success($request->user(), 'OK', 'success');
    }

    public function verifyForgotPassword(Request $request)
    {
        $validateData = $this->validateData($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'token' => ['required'],
        ]);
        if ($validateData->fails()) {
            return $this->error($validateData->errors(), 'BAD_REQUEST', 'Error', 400);
        }

        $check  = PasswordReset::where([
            ['email', '=', $request->email],
            ['token', '=', $request->token],
        ]);

        if (!$check->get()->isEmpty()) {
            $difference = Carbon::now()->diffInSeconds($check->first()->created_at);
            if ($difference > 3600) {
                return $this->error('Token Expired', 'BAD_REQUEST', 'Error', 400);
            }

            PasswordReset::where([
                ['email', '=', $request->email],
                ['token', '=', $request->token],
            ])->delete();
        }

        return $this->success(null, 'OK', 'verify success');
    }

    public function resetPassword(Request $request)
    {
        $validateData = $this->validateData($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols(), 'string', 'confirmed'],
        ]);

        if ($validateData->fails()) {
            return $this->error($validateData->errors(), 'BAD_REQUEST', 'Error', 400);
        }

        $user = User::where('email', $request->email);
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return $this->success([
            'token' => $user->first()->createToken('UserApiToken', ['user-api'])->plainTextToken,
            'message' => 'Your password has been reset'
        ]);
    }

    public function logout(Request $request)
    {
        User::where('email', $request->user()->email)->update([
            'otp_verified_at' => null
        ]);
        $request->user()->tokens()->delete();
        return $this->success(null, 'logout success', 200);
    }
}
