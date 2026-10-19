<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p><strong>Nom: </strong> <a href="{{route('artistes.show', $concert->artista)}}">{{ $concert->artista->nom }}</a></p>
                <p><strong>Nom: </strong> {{ $concert->nom }}</p>
                <p><strong>Data: </strong> {{ $concert->data_hora }}</p>
                <p><strong>Durada Minuts: </strong> {{ $concert->durada_minuts }}</p>
                <p><strong>Tipus: </strong> {{ $concert->tipus }}</p>

                <p><strong>Nom Escenari: </strong> {{ $concert->escenari->nom }} </p>
                <p><strong>Aforament: </strong> {{ $concert->escenari->aforament_maxim }} </p>
                <br>
                <a href="{{ route('concerts.index') }}">Tornar a la llista</a>
            </div>
        </div>
    </div>

</x-app-layout>
