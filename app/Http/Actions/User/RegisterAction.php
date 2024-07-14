<?php

namespace App\Http\Actions\User;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class RegisterAction
{
    public function execute($request)
    {
        try {
            // Creating user
            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Creating user authToken
            $token = $user->createToken('authToken')->plainTextToken;

            return response()->json(['message' => 'User created successfully', 'user' => $user, 'authToken' => $token], 201);
        } catch (\Exception $e) {
            Log::error('User register error: ' . $e->getMessage());
            return response()->json([
                'message' => 'Failed to register user. ' . $e->getMessage()
            ], 500);
        }
    }
}
