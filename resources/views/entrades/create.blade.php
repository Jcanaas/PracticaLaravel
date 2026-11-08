<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Comprar entrada
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p><strong>Concert:</strong> {{ $concert->nom }}</p>
            <p><strong>Artista:</strong> {{ $concert->artista->nom }}</p>
            <p><strong>Data:</strong> {{ $concert->data_hora->format('d/m/Y H:i') }}</p>
            <p><strong>Escenari:</strong> {{ $concert->escenari->nom }}</p>
            @error('aforament')
                <p style="color:red">{{ $message }}</p>
            @enderror
            <br>

            <form action="{{ route('entrades.store', $concert) }}" method="POST">
                @csrf
                <label for="preu_pagat">
                    Preu (€):
                </label><br>
                <input type="number" step="0.01" id="preu_pagat" name="preu_pagat" value="{{ old('preu_pagat') }}">
                @error('preu_pagat')
                    <p style="color:red">{{ $message }}</p>
                @enderror
                <br>
                <button type="submit">Comprar</button>
            </form>

            <br>
            <a href="{{ route('concerts.show', $concert) }}">Tornar al concert</a>
        </div>
    </div>
</x-app-layout>
