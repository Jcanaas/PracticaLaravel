<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Concerts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



            <table border="1" cellpadding="6">
                <tr>
                    <th>Artista</th>
                    <th>Concert</th>
                    <th>Data</th>
                    <th>Durada</th>
                    <th>Tipus</th>


                </tr>
                @foreach ($concerts as $concert)
                    <tr>
                        <td><a href="{{route('artistes.show', $concert->artista)}}">{{ $concert->artista->nom }}</a> </td>
                        <td><a href="{{route('concerts.show', $concert)}}"> {{ $concert->nom }}</a></td>
                        <td>{{ $concert->data_hora }}</td>
                        <td>{{ $concert->durada_minuts }}</td>
                        <td>{{ $concert->tipus }}</td>
                        <td>
                            @if($concert->tipus === 'CONCERT')
                                <span style="background-color: green; color: white; padding: 2px 8px; border-radius: 4px;">Concert</span>
                            @elseif($concert->tipus === 'DJ_SET')
                                <span style="background-color: orangered; color: white; padding: 2px 8px; border-radius: 4px;">DJ SET</span>
                            @elseif($concert->tipus === 'SHOWCASE')
                                <span style="background-color: blue; color: white; padding: 2px 8px; border-radius: 4px;">Showcase</span>
                            @elseif($concert->tipus === 'ACUSTIC')
                                <span style="background-color: yellow; color: white; padding: 2px 8px; border-radius: 4px;">Acustic</span>
                            @else
                                <span style="background-color: red; color: white; padding: 2px 8px; border-radius: 4px;">Error</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
            <br>
            <a href="{{ route('concerts.create') }}">Afegir concert</a>

        </div>
    </div>
</x-app-layout>
