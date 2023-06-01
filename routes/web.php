<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::middleware(['auth:sanctum'])->get('/tokens/create', function (Request $request) {
//     $token = $request->user()->createToken('test', ['testing']);

//     return ['token' => $token->plainTextToken];
// });

// Route::middleware(['auth:sanctum'])->get('/test', function (Request $request) {
//     $request->user()->tokens()->delete();
// });
