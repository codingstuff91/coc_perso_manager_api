<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Collection;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection|Profile[]
     */
    public function index()
    {
        return Profile::all();
    }
}
