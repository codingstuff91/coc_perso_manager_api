<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param User $user
     *
     * @return Collection|Character[]
     */
    public function index(User $user): Collection
    {
        return $user->characters()->get();
    }

    /**
     * Display the character information
     *
     * @param Character $character
     *
     * @return Response
     */
    public function show(Character $character): Response
    {
        return Character::with([
            'profile',
            'particularity',
            'attributes',
            'weapons',
        ])->where('id', $character->id)->get()->first();
    }

    /**
     * Get all the capacities of a character
     *
     * @param Character $character
     *
     * @return Collection
     */
    public function capacities(Character $character): Collection
    {
        return $character->capacities()
            ->orderBy('level')
            ->get()
            ->groupBy('name');
    }

    /**
     * @param Character $character
     *
     * @return array
     */
    public function getAttributes(Character $character): array
    {
        return $character->attributes;
    }
}
