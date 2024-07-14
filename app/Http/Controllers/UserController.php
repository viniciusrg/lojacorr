<?php

namespace App\Http\Controllers;

use App\Http\Actions\User\LogoutAction;
use App\Http\Actions\User\LoginAction;
use App\Http\Actions\User\RegisterAction;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        $user = new RegisterAction();
        return $user->execute($request);
    }

    public function login (Request $request){
        $user = new LoginAction();
        return $user->execute($request);
    }

    public function logout(Request $request){
        $user = new LogoutAction();
        return $user->execute($request);
    }

    public function show(Request $request){
        return $request->user();
    }
}
