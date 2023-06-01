<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    use ApiResponse;

    public function index()
    {
        return new UserCollection(User::paginate(2));
    }
}
