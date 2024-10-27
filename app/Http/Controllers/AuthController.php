<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request) {
        dd($request->all());
    }
}

