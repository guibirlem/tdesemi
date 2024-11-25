<form action="{{ url('treinador/'.$treinador->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $treinador->name }}" placeholder="Nome" required>
    <button type="submit">atualizar ptreiandorsn</button>    
</form>
</body>