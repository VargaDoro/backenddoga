<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSzavakRequest;
use App\Http\Requests\UpdateSzavakRequest;
use App\Models\Szavak;

class SzavakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Szavak::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSzavakRequest $request)
    {
        $szavak = new Szavak();
        $szavak->fill($request->all());
        $szavak->save();
        return response()->json($szavak,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Szavak $szavak)
    {
        return Szavak::find($szavak);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSzavakRequest $request, Szavak $szavak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Szavak $szavak)
    {
        //
    }
}
