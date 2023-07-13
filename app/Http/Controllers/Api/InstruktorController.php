<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Instruktor;
use App\Http\Requests\StoreInstruktorRequest;
use App\Http\Requests\UpdateInstruktorRequest;
use App\Http\Resources\InstruktorResource;
use App\Http\Resources\InstruktorCollection;

class InstruktorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new InstruktorCollection(Instruktor::all());
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
    public function store(StoreInstruktorRequest $request)
    {
        return new InstruktorResource(Instruktor::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Instruktor $instruktor)
    {
        return new InstruktorResource($instruktor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instruktor $instruktor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstruktorRequest $request, Instruktor $instruktor)
    {
        $instruktor->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instruktor $instruktor)
    {
        $instruktor->delete();
    }
}
