<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required', 
            'password' => 'required'
        ]);

        if(!Auth::attempt($credentials))
        {
            return response()->json(['message' => 'Identifiants incorrects']);
        }
        
        return $request->user()->createToken('authToken')->plainTextToken;
    }
}
