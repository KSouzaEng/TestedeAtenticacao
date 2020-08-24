<h1>Deseja mesmo excluir a pessoa {{$api->nome}}</h1>

<form action="{{route('api.update', $api->id)}}" method="post">
    @csrf
    @method('DELETE')
    <input class="btn btn-danger" type="submit" value="Sim">
</form>

<a class="btn btn-primary" href="/api">Não</a>
