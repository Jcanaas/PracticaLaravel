<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Genere;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function index()
    {
        $artistes = Artista::with('generes')->orderBy('nom')->get();
        return view('artistes.index', compact('artistes'));
    }

    public function create()
    {
        $generes = Genere::orderBy('nom')->get();
        return view('artistes.create', compact('generes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom'   => 'required|string|max:255',
            'pais'  => 'required|string|max:100',
            'bio'   => 'nullable|string',
            'actiu' => 'boolean',
        ]);

        $artista = Artista::create($validated);

        $artista->generes()->sync($request->input('generes', []));

        return redirect()->route('artistes.index')
                         ->with('success', 'Artista creat correctament!');
    }

    public function show(Artista $artista)
    {
        return view('artistes.show', compact('artista'));
    }

    public function edit(Artista $artista)
    {
        $generes = Genere::orderBy('nom')->get();
        return view('artistes.edit', compact('artista', 'generes'));
    }

    public function update(Request $request, Artista $artista)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'imatge_url' => 'nullable|url',
            'actiu' => 'sometimes|boolean',
        ]);

        $artista->update($validated);

        $artista->generes()->sync($request->input('generes', []));

        return redirect()->route('artistes.index')
                         ->with('success', 'Artista actualitzat correctament!');
    }

    public function destroy(Artista $artista)
    {
        $artista->delete();

        return redirect()->route('artistes.index')
                         ->with('success', 'Artista eliminat correctament.');
    }
}
