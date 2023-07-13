<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Korisnik;
use App\Http\Requests\StoreKorisnikRequest;
use App\Http\Requests\UpdateKorisnikRequest;
use App\Http\Resources\KorisnikResource;
use App\Http\Resources\KorisnikCollection;

class KorisnikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new KorisnikCollection(Korisnik::all());
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
    public function store(StoreKorisnikRequest $request)
    {
        return new KorisnikResource(Korisnik::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Korisnik $korisnik)
    {
        return new KorisnikResource($korisnik);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Korisnik $korisnik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKorisnikRequest $request, Korisnik $korisnik)
    {
        $korisnik->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Korisnik $korisnik)
    {
        $korisnik->delete();
    }
}
