<?php

namespace App\Http\Controllers;

use App\Models\Enquete;
use App\Http\Requests\StoreEnqueteRequest;
use App\Http\Requests\UpdateEnqueteRequest;

class EnqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquetes = Enquete::orderBy('id', 'DESC')->get();
        return view('dashboard', compact('enquetes'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.enquete.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEnqueteRequest $request)
    {
        $request->validate([
            'nomealerteur' => 'required|max:255',
            'phonealerteur' => 'required',
            'provenance'=>'required',
            'adressealerteur' => 'required',
            'datereception' => 'required',
            'datedemarrage' => 'required',
            'categorie' => 'required',
            'entitees' => 'required',
            'typedecas' => 'required',
            'status' => 'required',
            'priorite' => 'required',
            'repete' => 'required',
            'avere' => 'required',
            'libelle' => 'required',
            'montantinitfinance' => 'required',
            'montantreelfinance' => 'required',
            'montantrecouvre' => 'required',
            'dateprevpubrapport' => 'required',
            'datefinalepubrapport' => 'required',
            'datediffusion' => 'required',
        ]);


        // Create new enquete instance

        if ($request) {

        } else {

        }


        $enquete = new Enquete();
        $enquete->libelle = $request->libelle;
        $enquete->date_reception = $request->datereception;
        $enquete->date_demarrage = $request->datedemarrage;
        $enquete->provenance = $request->cuidalerteur;
        $enquete->categorie = $request->categorie;
        $enquete->entites_concernes= $request->entitees;
        $enquete->type_cas = $request->typedecas;
        $enquete->repete = $request->repete;
        $enquete->avere = $request->avere;
        $enquete->commentaires = $request->commentaires;
        $enquete->priorite = $request->priorite;
        $enquete->montant_init_impact_financier = $request->montantinitfinance;
        $enquete->montant_reel_impact_financier = $request->montantreelfinance;
        $enquete->montant_recouvrir = $request->montantrecouvre;
        $enquete->date_prevision_pub_rapport = $request->dateprevpubrapport;
        $enquete->date_final_pub_rapport = $request->datefinalepubrapport;
        $enquete->date_diffusion = $request->datediffusion;
        $enquete->save();

        return redirect()->route('dashboard')->with('success', 'Enquête créee avec succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enquete $enquete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enquete $enquete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnqueteRequest $request, Enquete $enquete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enquete $enquete)
    {
        //

   }
}