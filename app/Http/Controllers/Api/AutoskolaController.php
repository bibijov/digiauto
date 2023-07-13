<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;


use App\Models\Autoskola;
use App\Http\Requests\StoreAutoskolaRequest;
use App\Http\Requests\UpdateAutoskolaRequest;
use App\Http\Resources\AutoskolaResource;
use App\Http\Resources\AutoskolaCollection;

class AutoskolaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new AutoskolaCollection(Autoskola::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAutoskolaRequest $request)
    {
        // dd($request->all());
        return new AutoskolaResource(Autoskola::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Autoskola $autoskola)
    {
        return new AutoskolaResource($autoskola);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autoskola $autoskola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAutoskolaRequest $request, Autoskola $autoskola)
    {
        $autoskola->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autoskola $autoskola)
    {
        $autoskola->delete();

    }
}
