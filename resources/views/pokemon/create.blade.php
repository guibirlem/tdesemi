<form action="{{ url('pokemon') }}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="tipo" placeholder="Tipo" required>
        <textarea name="pontos_de_poder" placeholder="Pontos de Poder" required></textarea>
        <label for="treinador">Treinador</label>
        <select id="treinador" name="treinador_id" required>
            <option value="">Escolha um treinador</option>
            @foreach($treinador as $treinadorItem)
                <option value="{{ $treinadorItem->id }}">{{ $treinadorItem->name }}</option>
            @endforeach
        </select>
        <button type="submit">Criar Pokémon</button>
    </form>