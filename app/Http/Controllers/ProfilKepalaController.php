<?php

namespace App\Http\Controllers;

use App\Models\ProfilKepala;
use App\Http\Requests\StoreProfilKepalaRequest;
use App\Http\Requests\UpdateProfilKepalaRequest;

class ProfilKepalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profil.profilKepala', [
            'title' => 'Profil Kepala'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfilKepalaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfilKepalaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfilKepala  $profilKepala
     * @return \Illuminate\Http\Response
     */
    public function show(ProfilKepala $profilKepala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfilKepala  $profilKepala
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfilKepala $profilKepala)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfilKepalaRequest  $request
     * @param  \App\Models\ProfilKepala  $profilKepala
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfilKepalaRequest $request, ProfilKepala $profilKepala)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfilKepala  $profilKepala
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfilKepala $profilKepala)
    {
        //
    }
}
