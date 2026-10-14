    <label for="artista_id">
        Artista:
    </label><br>
    <select name="artista_id" id="artista_id">
        <option value="">-- Selecciona --</option>
        @foreach($artistes as $artista)
            <option value="{{ $artista->id }}"
                {{ old('artista_id', $concert->artista_id ?? '') == $artista->id ? 'selected' : '' }}>
                {{ $artista->nom }}
            </option>
        @endforeach
    </select>
    @error('artista_id')
        <p style="color:red">{{ $message }}</p>
    @enderror
    <br>

    <label for="nom">
        Nom:
    </label><br>
    <input type="text" id="nom" name="nom" value="{{ old('nom', $concert->nom ?? '') }}">
    @error('nom')
        <p style="color:red">{{ $message }}</p>
    @enderror
    <br>

    <label for="data_hora">
        Data i hora:
    </label><br>
    <input type="datetime-local" id="data_hora" name="data_hora"
           value="{{ old('data_hora', isset($concert) ? $concert->data_hora->format('Y-m-d\TH:i') : '') }}">
    @error('data_hora')
        <p style="color:red">{{ $message }}</p>
    @enderror
    <br>

    <label for="durada_minuts">
        Durada (minuts):
    </label><br>
    <input type="number" id="durada_minuts" name="durada_minuts" min="15" max="300"
           value="{{ old('durada_minuts', $concert->durada_minuts ?? '') }}">
    @error('durada_minuts')
        <p style="color:red">{{ $message }}</p>
    @enderror
    <br>

    <label for="tipus">
        Tipus:
    </label><br>
    <select name="tipus" id="tipus">
        <option value="">-- Selecciona --</option>
        @foreach(['CONCERT', 'DJ_SET', 'SHOWCASE', 'ACUSTIC'] as $t)
            <option value="{{ $t }}" {{ old('tipus', $concert->tipus ?? '') == $t ? 'selected' : '' }}>
                {{ $t }}
            </option>
        @endforeach
    </select>
    @error('tipus')
        <p style="color:red">{{ $message }}</p>
    @enderror
    <br>
