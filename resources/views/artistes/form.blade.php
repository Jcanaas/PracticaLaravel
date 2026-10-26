 <label for="nom">
        Nom:
    </label><br>
    <input type="text" id="nom" name="nom" value="{{ old('nom', $artista->nom ?? '') }}">
    @error('nom')
        <p style="color:red">{{ $message }}</p>
    @enderror
    <br>

    <label for="pais">
        Pais:
    </label><br>
    <input type="text" id="pais" name="pais" value="{{ old('pais', $artista->pais ?? '') }}">
    @error('pais')
        <p style="color:red">{{ $message }}</p>
    @enderror
    <br>

    <label for="bio">
        Biografia:
    </label><br>
    <input type="text" id="bio" name="bio" value="{{ old('bio', $artista->bio ?? '') }}">
    @error('bio')
        <p style="color:red">{{ $message }}</p>
    @enderror
    <br>

    <label for="imatge_url">
        Imagen:
    </label><br>
    <input type="text" id="imatge_url" name="imatge_url" value="{{ old('imatge_url', $artista->imatge_url ?? '') }}">
    @error('imatge_url')
        <p style="color:red">{{ $message }}</p>
    @enderror
    <br>

    <label for="actiu">
        Activo:
    </label><br>
    <input type="hidden" name="actiu" value="0">
    <input type="checkbox" id="actiu" name="actiu" value="1"
           {{ old('actiu', $artista->actiu ?? true) ? 'checked' : '' }}>
    <br>

    <div style="margin-top: 15px">
        <label><strong>Gèneres:</strong></label>
        @foreach($generes as $genere)
            <label style="margin-right: 10px">
                <input type="checkbox"
                       name="generes[]"
                       value="{{ $genere->id }}"
                       @checked(in_array($genere->id, old('generes', isset($artista) ? $artista->generes->pluck('id')->toArray() : [])))>
                {{ $genere->nom }}
            </label>
        @endforeach
    </div>
