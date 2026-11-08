<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Assistents de {{ $concert->nom }} — {{ $concert->escenari->nom }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <p>{{ $concert->entrades->count() }} / {{ $concert->escenari->aforament_maxim }} entrades venudes</p>
            @if ($concert->entrades->count() >= $concert->escenari->aforament_maxim)
                <p style="color:red"><strong>Esgotades</strong></p>
            @endif
            <br>

            <table border="1" cellpadding="6">
                <tr>
                    <th>Usuari</th>
                    <th>Data de compra</th>
                    <th>Codi d'entrada</th>
                </tr>
                @forelse ($concert->entrades as $entrada)
                    <tr>
                        <td>{{ $entrada->user->name }}</td>
                        <td>{{ $entrada->created_at->format('d/m/Y H:i') }}</td>
                        <td>{{ $entrada->codi_entrada }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Encara no hi ha assistents.</td>
                    </tr>
                @endforelse
            </table>

            <br>
            <a href="{{ route('concerts.show', $concert) }}">Tornar al concert</a>
        </div>
    </div>
</x-app-layout>
