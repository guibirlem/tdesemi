@foreach($treinador as $entity)
    <div>
        <h3>{{ $entity->name }}</h3>
        <ul>
            @foreach($entity->pokemons as $pokemon)
                <li>{{ $pokemon->nome }}</li>
            @endforeach
        </ul>
        <a href="{{ url('treinador/'.$entity->id.'/edit') }}">Editar</a>
    </div>
@endforeach