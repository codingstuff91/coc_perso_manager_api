<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return $user->characters()->get();
        return Character::with(['profile', 'particularity'])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the character informations
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        return Character::with([
            'profile', 
            'particularity', 
            'attributes', 
            'weapons'
        ])->where('id', $character->id)->get()->first();
    }

    /**
     * Get all the capacities of a character
     * 
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function capacities(Character $character)
    {
        return $character->capacities()
                         ->orderBy('level')
                         ->get()
                         ->groupBy('name');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        //
    }

    public function getAttributes(Character $character)
    {
        return $character->attributes;
    }
}
