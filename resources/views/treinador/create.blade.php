<form action="{{ url('treinador') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome do Treinador" required>
    <button type="submit">Criar Treinador</button>
</form>