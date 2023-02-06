<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        //TODO: Make request file + validation.
        User::create([
            'name'           => $request->name,
            'email'          => $request->email,
            'password'       => Hash::make($request->password),
            'remember_token' => Str::random(10),
        ]);

        return response()->json(['messsage' => 'Nouvel utilisateur crée']); //TODO: Translation

    }

    /**
     * @param Request $request
     *
     * @return array|JsonResponse
     */
    public function login(Request $request)
    {
        //TODO: Make request file
        $credentials = $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Identifiants incorrects']);// TODO: Translation
        }

        $authToken = $request->user()->createToken('authToken')->plainTextToken;
        $user = Auth::user();

        return [$user, $authToken];
    }
}
