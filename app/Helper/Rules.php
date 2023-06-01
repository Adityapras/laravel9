<?php

namespace App\Helper;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

/**
 * 
 */
trait Rules
{
    protected function validateData($requets, $rules)
    {
        return Validator::make($requets->all(), $rules);
    }

    protected function registerRules()
    {
        return  [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()]
        ];
    }

    protected function loginRules()
    {
        return  [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8'
        ];
    }
}
