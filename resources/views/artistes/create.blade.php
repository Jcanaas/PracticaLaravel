<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('artistes.store') }}" method="POST">
                @csrf
                @include('artistes.form')
                <button type="submit">Crear</button>
            </form>
        </div>
    </div>
</x-app-layout>
