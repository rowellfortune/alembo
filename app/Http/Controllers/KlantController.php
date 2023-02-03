<?php

namespace App\Http\Controllers;

use App\Models\Klant;
use Illuminate\Http\Request;

class KlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Klant::latest()->paginate(5);

      return view('/klant/index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('/klant/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'voornaam' =>  'required',
        'achternaam' =>  'required',
        'geslacht' =>  'required',
        'adres' =>  'required',
        'huisnummer' =>  'required',
        'district' =>  'required',
        'telefoonnummer' =>  'required',
        'email' =>  'required|email'
      ]);



      $klant = new Klant;

      $klant->voornaam        =  $request->voornaam;
      $klant->achternaam      =  $request->achternaam;
      $klant->geslacht        =  $request->geslacht;
      $klant->adres           =  $request->adres;
      $klant->huisnummer      =  $request->huisnummer;
      $klant->district        =  $request->district;
      $klant->telefoonnummer  =  $request->telefoonnummer;
      $klant->email           =  $request->email;
      $klant->save();

      return redirect()->route('klant.index')->with('success', 'Klant successvol toegevoegd.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function show(Klant $klant)
    {
      return view('klant.show', compact('klant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function edit(Klant $klant)
    {
      return view('klant.edit', compact('klant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klant $klant)
    {
      $request->validate([
        'voornaam' =>  'required',
        'achternaam' =>  'required',
        'geslacht' =>  'required',
        'adres' =>  'required',
        'huisnummer' =>  'required',
        'district' =>  'required',
        'telefoonnummer' =>  'required|min:7|max:10',
        'email' =>  'required|email'
      ]);

    $klant = Klant::find($request->hidden_id);

    $klant->voornaam =  $request->voornaam;
    $klant->achternaam =  $request->achternaam;
    $klant->geslacht = $request->geslacht;
    $klant->adres =  $request->adres;
    $klant->huisnummer =  $request->huisnummer;
    $klant->district =  $request->district;
    $klant->telefoonnummer =  $request->telefoonnummer;
    $klant->email =  $request->email;
    $klant->save();

    return redirect()->route('klant.index')->with('success', 'Klant Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klant $klant)
    {

      $klant->delete();

      return redirect()->route('klant.index')->with('success', 'Klant Data deleted successfully');
    }
}