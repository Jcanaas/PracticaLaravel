<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p><strong>Nom:</strong> {{ $artista->nom }}</p>
                <p><strong>País:</strong> {{ $artista->pais }}</p>
                <p><strong>Biografia:</strong> {{ $artista->bio }}</p>
                <p><strong>Imatge URL:</strong> {{ $artista->imatge_url }}</p>
                <p><strong>Actiu:</strong> {{ $artista->actiu ? 'Sí' : 'No' }}</p>

                <br><br>

                <p style="margin-top: 15px"><strong>Gèneres:</strong></p>
                <ul>
                    @forelse($artista->generes as $genere)
                        <li>{{ $genere->nom }}</li>
                    @empty
                        <li>Sense gèneres assignats</li>
                    @endforelse
                </ul>

                <br><br>

                @if ($artista->concerts->count() > 0)
                    <h3>Concerts programats</h3>
                    <ul>
                        @foreach ($artista->concerts as $concert)
                            <li>{{ $concert->nom }} — {{ $concert->data_hora->format('d/m/Y H:i') }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>Encara no té concerts programats.</p>
                @endif


                <br>
                <a href="{{ route('artistes.index') }}">Tornar a la llista</a>
                |
                <a href="{{ route('artistes.edit', $artista) }}">Editar</a>

            </div>
        </div>
    </div>


</x-app-layout>
