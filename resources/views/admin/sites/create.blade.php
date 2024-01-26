<h1>Cadastrar Novo Site</h1>

<x-alerts/>

<form action="{{ route('sites.store') }}" method="POST">
    @csrf
    <input type="text" name="url" placeholder="URL">
    <button type="submit">Enviar</button>
</form>
