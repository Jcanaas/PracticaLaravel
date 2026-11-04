<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concert;
use App\Models\Artista;
use App\Models\Escenari;
use App\Models\Genere;
use Illuminate\Support\Facades\DB;

class EstadistiquesController extends Controller
{

    public function index()
    {

        // 1. Top 5 concerts amb més entrades venudes (nom, artista, total)
        $topConcerts = Concert::with('artista')
            ->withCount('entrades')
            ->orderByDesc('entrades_count')
            ->take(5)
            ->get();

        // 2. Top 5 artistes amb més concerts programats
        $topArtistes = Artista::withCount('concerts')
            ->orderByDesc('concerts_count')
            ->take(5)
            ->get();

        // 3. Recaptació total per escenari (nom, suma de preu_pagat)
        $recaptacioEscenaris = Escenari::withSum('entrades', 'preu_pagat')
            ->get();

        // 4. Gèneres més populars: ordenats per nombre total d'entrades dels seus artistes
        $generesPopulars = Genere::select('generes.id', 'generes.nom', DB::raw('COUNT(entradas.id) as total_entrades'))
            ->join('artista_genere', 'generes.id', '=', 'artista_genere.genere_id')
            ->join('artistes', 'artista_genere.artista_id', '=', 'artistes.id')
            ->join('concerts', 'artistes.id', '=', 'concerts.artista_id')
            ->join('entrades', 'concerts.id', '=', 'entrades.concert_id')
            ->groupBy('generes.id', 'generes.nom')
            ->orderByDesc('total_entrades')
            ->get();

        // 5. Ocupació mitjana per escenari: entrades venudes / (aforament × nombre de concerts de l'escenari) × 100
        $ocupacioEscenaris = Escenari::withCount(['concerts', 'entrades'])
            ->get()
            ->map(function ($escenari){
                $capacitatTotal = $escenari->aforament * $escenari->concerts_count;
                $escenari->percentatge_ocupacio = $capacitatTotal > 0
                    ? round(($escenari->entrades_count / $capacitatTotal) * 100, 2)
                    : 0;
                return $escenari;
            });

        return view('estadistiques.index', compact(
           'topConcerts',
           'topArtistes',
           'recaptacioEscenaris',
           'generesPopulars',
           'ocupacioEscenaris'
        ));
    }
}
