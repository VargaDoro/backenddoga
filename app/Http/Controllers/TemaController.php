<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemaRequest;
use App\Http\Requests\UpdateTemaRequest;
use App\Models\Tema;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tema::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTemaRequest $request)
    {
        $tema = new Tema();
        $tema->fill($request->all());
        $tema->save();
        return response()->json($tema, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tema $tema)
    {
        return Tema::find($tema);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTemaRequest $request, Tema $tema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tema $tema)
    {
        //
    }
}
