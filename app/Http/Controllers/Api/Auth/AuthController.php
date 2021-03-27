<?php

namespace App\Http\Controllers\Api\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Api\Controller;

class AuthController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }





    public function me()
    {
        return response()->json(auth('api')->user());
    }

    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }


    public function login(Request $request)
    {
        $creds = $request->only(['email', 'password']);

        if (!$token = auth('api')->attempt($creds)) {
            return response()->json(['error' => "Incorrect Passowrd/Email"], 401);
        }

        // return response()->json(['token' => $token]);
        return $this->respondWithToken($token);
    }


    public function refresh()
    {
        try {
            $newToken = auth('api')->refresh();
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }
 

        // return response()->json(['token' => $newToken]);
        return $this->respondWithToken($newToken);
    }

    public function register(Request $request)
    {
        $details = $request->only(['name', 'email', 'password']);

        $validate = Validator::make($details, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // if ($validate->fails()) {
        //     return response()->json(['error' => 'invalid information']);
        // }

        try {
            $user = User::create([
                'name' => $details['name'],
                'email' => $details['email'],
                'password' => Hash::make($details['password']),
            ]);    
        } catch (\PDOException $e) {
            return response()->json([
                'error' => "Database Error"
            ]);
        }
        
        return response()->json([
            'status'    => 'user successfuly created',
            'user'      => $user,
        ]);

    }



    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

}
