<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Concert;
use App\Models\Escenari;
use App\Models\Genere;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function index(Request $request)
    {
        $query = Concert::with(['artista.generes', 'escenari']);

        if ($request->filled('escenari_id')) {
            $query->where('escenari_id', $request->input('escenari_id'));
        }

        if ($request->filled('genere_id')) {
            $query->whereHas('artista.generes', function ($q) use ($request) {
                $q->where('generes.id', $request->input('genere_id'));
            });
        }

        if ($request->filled('data_inici')) {
            $query->whereDate('data_hora', '>=', $request->input('data_inici'));
        }

        if ($request->filled('data_fi')) {
            $query->whereDate('data_hora', '<=', $request->input('data_fi'));
        }

        $concerts = $query->orderBy('data_hora')->get();
        $escenaris = Escenari::orderBy('nom')->get();
        $generes = Genere::orderBy('nom')->get();

        return view('concerts.index', compact('concerts', 'escenaris', 'generes'));
    }

    public function show(Concert $concert)
    {
        return view('concerts.show', compact('concert'));
    }

    public function create()
    {
        $artistes = Artista::where('actiu', true)->orderBy('nom')->get();
        $escenaris = Escenari::orderBy('nom')->get();

        return view('concerts.create', compact('artistes', 'escenaris'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'artista_id' => 'required|exists:artistes,id',
            'escenari_id' => 'required|exists:escenaris,id',
            'nom'   => 'required|string|max:255',
            'data_hora' => 'required|date',
            'durada_minuts' => 'required|integer|min:15|max:300',
            'tipus' => 'required|in:CONCERT,DJ_SET,SHOWCASE,ACUSTIC',
        ]);

        Concert::create($validated);

        return redirect()->route('concerts.index')
                         ->with('success', 'Concert creat correctament!');
    }
}
