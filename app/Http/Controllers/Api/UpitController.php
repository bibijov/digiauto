<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Upit;
use App\Http\Requests\StoreUpitRequest;
use App\Http\Requests\UpdateUpitRequest;
use App\Http\Resources\UpitResource;
use App\Http\Resources\UpitCollection;

class UpitController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new UpitCollection(Upit::all());
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
    public function store(StoreUpitRequest $request)
    {
        return new UpitResource(Upit::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Upit $upit)
    {
        return new UpitResource($upit);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upit $upit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUpitRequest $request, Upit $upit)
    {
        $upit->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upit $upit)
    {
        $upit->delete();
    }
}
