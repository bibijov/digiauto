<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kviz;
use App\Http\Requests\StoreKvizRequest;
use App\Http\Requests\UpdateKvizRequest;
use App\Http\Resources\KvizResource;
use App\Http\Resources\KvizCollection;

class KvizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new KvizCollection(Kviz::all());
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
    public function store(StoreKvizRequest $request)
    {
        return new KvizResource(Kviz::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Kviz $kviz)
    {
        return new KvizResource($kviz);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kviz $kviz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKvizRequest $request, Kviz $kviz)
    {
        $kviz->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kviz $kviz)
    {
        $user->delete();
    }
}
