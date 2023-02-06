<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Advantage[]|Collection
     */
    public function index(): Collection
    {
        return Advantage::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Advantage $advantage
     *
     * @return Advantage
     */
    public function edit(Advantage $advantage): Advantage
    {
        return $advantage;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request   $request
     * @param Advantage $advantage
     *
     * @return JsonResponse
     */
    public function update(Request $request, Advantage $advantage): JsonResponse
    {
        $advantage->update([
            'name'        => $request->name,
            'description' => $request->description,
        ]);

        return response()->json(['message' => 'trait édité avec succès']); // TODO: Translation
    }
}
