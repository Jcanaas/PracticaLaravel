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
        $topConcerts = Concert::with('artista')
            ->withCount('entrades')
            ->orderByDesc('entrades_count')
            ->take(5)
            ->get();

        $topArtistes = Artista::withCount('concerts')
            ->orderByDesc('concerts_count')
            ->take(5)
            ->get();

        $recaptacioEscenaris = Escenari::withSum('entrades', 'preu_pagat')
            ->get();

        $generesPopulars = Genere::select('generes.id', 'generes.nom', DB::raw('COUNT(entrades.id) as total_entrades'))
            ->join('artista_genere', 'generes.id', '=', 'artista_genere.genere_id')
            ->join('artistes', 'artista_genere.artista_id', '=', 'artistes.id')
            ->join('concerts', 'artistes.id', '=', 'concerts.artista_id')
            ->join('entrades', 'concerts.id', '=', 'entrades.concert_id')
            ->groupBy('generes.id', 'generes.nom')
            ->orderByDesc('total_entrades')
            ->get();

        $ocupacioEscenaris = Escenari::withCount(['concerts', 'entrades'])
            ->get()
            ->map(function ($escenari) {
                $capacitatTotal = $escenari->aforament_maxim * $escenari->concerts_count;
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
