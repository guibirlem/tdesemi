<form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $pokemon->name }}" required>
    <input type="text" name="type" placeholder="Type" value="{{ $pokemon->type }}" required>
    <input type="number" name="strenght" placeholder="Strenght" value="{{ $pokemon->strenght }}" required>
    <button type="submit">Update Pokemon</button>
</form>