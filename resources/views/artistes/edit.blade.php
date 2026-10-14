<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar {{ $artista->nom }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <form action="{{ route('artistes.update', $artista) }}" method="POST">
                @csrf
                @method('PUT')
                @include('artistes.form')
                <button type="submit">Actualitzar</button>
            </form>
        </div>
    </div>
</x-app-layout>
