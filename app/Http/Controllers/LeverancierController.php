<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leverancier;

class LeverancierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Leverancier::latest()->paginate(5);

      return view('/leverancier/index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('/leverancier/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLeverancierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'bedrijfsnaam' =>'required',
        'adres'=> 'required',
        'district' => 'required',
        'directeur'=> 'required',
        'telefoonnummer'=> 'required',
        'website' => 'required'
      ]);

      $leverancier = new Leverancier();

      $leverancier->bedrijfsnaam    = $request->bedrijfsnaam;
      $leverancier->adres           = $request->adres;
      $leverancier->district        = $request->district;
      $leverancier->directeur       = $request->directeur;
      $leverancier->telefoonnummer  = $request->telefoonnummer;
      $leverancier->website         = $request->website;
      $leverancier->save();

      return redirect()->route('leverancier.index')->with('success', 'Leveranciers Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leverancier  $leverancier
     * @return \Illuminate\Http\Response
     */
    public function show(Leverancier $leverancier)
    {
      return view('leverancier.show', compact('leverancier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leverancier  $leverancier
     * @return \Illuminate\Http\Response
     */
    public function edit(Leverancier $leverancier)
    {
      return view('leverancier.edit', compact('leverancier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeverancierRequest  $request
     * @param  \App\Models\Leverancier  $leverancier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leverancier $leverancier)
    {
      $request->validate([
        'bedrijfsnaam' =>'required',
        'adres'=> 'required',
        'district' => 'required',
        'directeur'=> 'required',
        'telefoonnummer'=> 'required',
        'website' => 'required',
        'is_published' => 'required'
      ]);


      $leverancier = Leverancier::find($request->hidden_id);

      $leverancier->bedrijfsnaam    = $request->bedrijfsnaam;
      $leverancier->adres           = $request->adres;
      $leverancier->district        = $request->district;
      $leverancier->directeur       = $request->directeur;
      $leverancier->telefoonnummer  = $request->telefoonnummer;
      $leverancier->website         = $request->website;
      $leverancier->is_published         = $request->is_published;
      $leverancier->save();

      return redirect()->route('leverancier.index')->with('success', 'Leverancier Data has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leverancier  $leverancier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leverancier $leverancier)
    {
      $leverancier->delete();

      return redirect()->route('leverancier.index')->with('success', 'Leverancier Data deleted successfully');
    }
}