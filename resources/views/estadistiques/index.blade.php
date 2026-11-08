<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Estadístiques del Sistema
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-bold mb-4">1. Top 5 concerts amb més entrades venudes</h3>
                <ol class="list-decimal pl-5">
                    @forelse($topConcerts as $concert)
                        <li>
                            <strong>{{ $concert->nom }}</strong> ({{ $concert->artista->nom }}) —
                            {{ $concert->entrades_count }} entrades venudes
                        </li>
                    @empty
                        <li>Sense dades disponibles</li>
                    @endforelse
                </ol>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-bold mb-4">2. Top 5 artistes amb més concerts programats</h3>
                <ol class="list-decimal pl-5">
                    @forelse($topArtistes as $artista)
                        <li>
                            <strong>{{ $artista->nom }}</strong> — {{ $artista->concerts_count }} concerts
                        </li>
                    @empty
                        <li>Sense dades disponibles</li>
                    @endforelse
                </ol>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-bold mb-4">3. Recaptació total per escenari</h3>
                <ul class="list-disc pl-5">
                    @forelse($recaptacioEscenaris as $escenari)
                        <li>
                            <strong>{{ $escenari->nom }}:</strong>
                            {{ number_format($escenari->entrades_sum_preu_pagat ?? 0, 2) }} €
                        </li>
                    @empty
                        <li>Sense dades disponibles</li>
                    @endforelse
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-bold mb-4">4. Gèneres més populars</h3>
                <ol class="list-decimal pl-5">
                    @forelse($generesPopulars as $genere)
                        <li>
                            <strong>{{ $genere->nom }}:</strong> {{ $genere->total_entrades }} entrades
                        </li>
                    @empty
                        <li>Sense dades disponibles</li>
                    @endforelse
                </ol>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-bold mb-4">5. Ocupació mitjana per escenari</h3>
                <ul class="list-disc pl-5">
                    @forelse($ocupacioEscenaris as $escenari)
                        <li>
                            <strong>{{ $escenari->nom }}:</strong> {{ $escenari->percentatge_ocupacio }}%
                            ({{ $escenari->entrades_count }} entrades de {{ $escenari->aforament_maxim * $escenari->concerts_count }} places totals)
                        </li>
                    @empty
                        <li>Sense dades disponibles</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
