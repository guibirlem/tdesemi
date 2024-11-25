@foreach($pokemon as $entity)
    <div>
        <h3>nome{{ $entity->nome }}</h3>
        <p>tipo{{ $entity->tipo }}</p>
        <p>pontos de poder{{ $entity->pontos_de_poder }}</p>
        <p>Treinador: {{ $entity->treinador->name }}</p>
        <a href="{{ url('pokemon/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('pokemon/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
