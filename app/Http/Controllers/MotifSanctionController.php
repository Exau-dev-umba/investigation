<?php

namespace App\Http\Controllers;

use App\Models\motif_sanction;
use App\Http\Requests\Storemotif_sanctionRequest;
use App\Http\Requests\Updatemotif_sanctionRequest;

class MotifSanctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storemotif_sanctionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(motif_sanction $motif_sanction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(motif_sanction $motif_sanction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatemotif_sanctionRequest $request, motif_sanction $motif_sanction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(motif_sanction $motif_sanction)
    {
        //
    }
}
