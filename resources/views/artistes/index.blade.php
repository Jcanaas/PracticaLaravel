<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Artistes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('artistes.create') }}">Nou artista</a>

            <table border="1" cellpadding="6">
                <tr>
                    <th>Nom</th>
                    <th>País</th>
                    <th>Gèneres</th>
                    <th>Actiu</th>
                    <th>Accions</th>
                </tr>
                @foreach ($artistes as $artista)
                    <tr>
                        <td>{{ $artista->nom }}</td>
                        <td>{{ $artista->pais }}</td>
                        <td>{{$artista->generes->pluck('nom')->join(', ') ?: 'Sense gènere'}}</td>
                        <td>
                            @if ($artista->actiu)
                                <span style="background-color: green; color: white; padding: 2px 8px; border-radius: 4px;">Actiu</span>
                            @else
                                <span style="background-color: gray; color: white; padding: 2px 8px; border-radius: 4px;">Inactiu</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('artistes.show', $artista) }}">Veure</a>
                            |
                            <a href="{{ route('artistes.edit', $artista) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
</x-app-layout>
