<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Les meves entrades
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <p style="color:green">{{ session('success') }}</p>
            @endif

            @if ($entrades->isEmpty())
                <p>Encara no has comprat cap entrada.</p>
            @else
                <table border="1" cellpadding="6">
                    <tr>
                        <th>Concert</th>
                        <th>Artista</th>
                        <th>Data</th>
                        <th>Preu pagat</th>
                        <th>Codi d'entrada</th>
                    </tr>
                    @foreach ($entrades as $entrada)
                        <tr>
                            <td><a href="{{ route('concerts.show', $entrada->concert) }}">{{ $entrada->concert->nom }}</a></td>
                            <td>{{ $entrada->concert->artista->nom }}</td>
                            <td>{{ $entrada->concert->data_hora->format('d/m/Y H:i') }}</td>
                            <td>{{ $entrada->preu_pagat }} €</td>
                            <td>{{ $entrada->codi_entrada }}</td>
                        </tr>
                    @endforeach
                </table>
            @endif

        </div>
    </div>
</x-app-layout>
