<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use App\Models\Entrada;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public function mevesentrades()
    {
        $entrades = auth()->user()->entradas()
            ->with('concert.artista')
            ->get()
            ->sortBy(fn ($entrada) => $entrada->concert->data_hora);

        return view('entrades.meves', compact('entrades'));
    }

    public function create(Concert $concert)
    {
        $concert->load(['artista', 'escenari']);

        return view('entrades.create', compact('concert'));
    }

    public function store(Request $request, Concert $concert)
    {
        $validated = $request->validate([
            'preu_pagat' => 'required|numeric|min:0|max:999.99',
        ]);

        if ($concert->entrades()->count() >= $concert->escenari->aforament_maxim) {
            return back()->withErrors(['aforament' => 'Aquest concert està ple.']);
        }

        Entrada::create([
            'user_id' => auth()->id(),
            'concert_id' => $concert->id,
            'preu_pagat' => $validated['preu_pagat'],
        ]);

        return redirect()->route('entrades.meves')
                         ->with('success', 'Entrada comprada correctament!');
    }

    public function assistents(Concert $concert)
    {
        $concert->load(['escenari', 'entrades.user']);

        return view('entrades.assistents', compact('concert'));
    }
}
