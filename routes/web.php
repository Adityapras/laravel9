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
    $resource = [
        'news' => [
            'https://media-rockstargames-com.akamaized.net/tina-uploads/posts/k4o57ookaa57o8/912a381098afdb30cf5c585d6a84c6b0a26dafe2.jpg',
            'https://media-rockstargames-com.akamaized.net/tina-uploads/posts/75k42ak2422o4o/cb3c95e7abaff50b9d7f3aa16b9c82d073ad5d42.jpg',
            'https://media-rockstargames-com.akamaized.net/tina-uploads/posts/175k2k7797a9k4/55f055553b0e5985df8705d011e7e6a858886e5f.jpg',
            'https://media-rockstargames-com.akamaized.net/tina-uploads/posts/39o415k472o87o/6c4cb9267b4d06514ca835688e7387148dce39b6.jpg'
        ],
        'featured' => [
            'https://media-rockstargames-com.akamaized.net/rockstargames-newsite/img/global/games/fob/640/reddeadredemption2.jpg',
            'https://media-rockstargames-com.akamaized.net/rockstargames-newsite/img/global/games/fob/640/GTATrilogy.jpg',
            'https://media-rockstargames-com.akamaized.net/rockstargames-newsite/img/global/games/fob/640/reddeadonline.jpg',
            'https://media-rockstargames-com.akamaized.net/rockstargames-newsite/img/global/games/fob/640/V.jpg'
        ]
    ];
    return view('test', ['resource' => $resource]);
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
