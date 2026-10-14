<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concert;
use App\Models\Artista;

class ConcertController extends Controller
{
    public function index()
    {

        $concerts = Concert::orderBy('data_hora')->get();
        return view('concerts.index', compact('concerts'));
    }

    public function show(Concert $concert)
    {
        return view('concerts.show', compact('concert'));
    }

    public function create(){
        $artistes = Artista::where('actiu', true)->orderBy('nom')->get();
        return view('concerts.create', compact('artistes'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'artista_id' => 'required|exists:artistes,id',
            'nom'   => 'required|string|max:255',
            'data_hora' => 'required|date',
            'durada_minuts' => 'required|integer|min:15|max:300',
            'tipus' => 'required|in:CONCERT,DJ_SET,SHOWCASE,ACUSTIC',
        ]);
        Concert::create($validated);
        return redirect()->route('concerts.index');
    }
}
