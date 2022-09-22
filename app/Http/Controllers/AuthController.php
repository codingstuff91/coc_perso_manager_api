<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(10),
        ]);

        return response()->json(['messsage' => 'Nouvel utilisateur crée']);

    }
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
