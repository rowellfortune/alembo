<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use App\Models\Klant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $klant = Klant::where('is_published', '=', 'published')->count();
        $leverancier = Leverancier::where('is_published', '=', 'published')->count();
        return view('home', compact('klant', 'leverancier'));
    }
}