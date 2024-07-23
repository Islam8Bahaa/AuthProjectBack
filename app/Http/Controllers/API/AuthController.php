<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(AuthRequest $request)
    {
        $register = $request->all();
        $register['password'] = bcrypt($register['password']);
        $user = User::create($register);

        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;

        $response = [
            'success' => true,
            'message' => 'User created successfully',
            'data' => $success
        ];

        return response()->json($response, 200);
    }


    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email , 'password' => $request->password])) {
            $user = $request->user();
            // dd($user);
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;

            $response = [
                'success' => true,
                'message' => 'User created successfully',
                'data' => $success
            ];

            return response()->json($response, 200);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials'
            ], 401);
        }
    }

    public function logout(Request $request)
{
    $user = $request->user();
    $user->currentAccessToken()->delete();

    return response()->json([
        'success' => true,
        'message' => 'Successfully logged out',
    ]);
}

}
