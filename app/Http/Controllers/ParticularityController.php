<?php

namespace App\Http\Controllers;

use App\Models\Particularity;
use Illuminate\Http\Request;

class ParticularityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Particularity::all();
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Particularity  $particularity
     * @return \Illuminate\Http\Response
     */
    public function edit(Particularity $particularity)
    {
        return $particularity;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Particularity  $particularity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Particularity $particularity)
    {
        $particularity->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json(['message' => 'trait édité avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Particularity  $particularity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Particularity $particularity)
    {
        //
    }
}
