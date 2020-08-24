@extends('layouts.app');

@section('titulo','Dados Cadastrados')

@section('content')

<table class="table table-striped">
    <tr>
        <th> ID </th>
        <th> Nome </th>
        <th> Telefone </th>
        <th> Cep </th>
        <th> Rua </th>
        <th> Bairro </th>
        <th> Cidade </th>
        <th> Estado </th>
        <th> Ações </th>
    </tr>
    @foreach ($pessoas as $p)

<tr>
    <td>{{$p->id}}</td>
    <td>{{$p->nome}}</td>
    <td>{{$p->telefone}}</td>
    <td>{{$p->cep}}</td>
    <td>{{$p->rua}}</td>
    <td>{{$p->bairro}}</td>
    <td>{{$p->cidade}}</td>
    <td>{{$p->uf}}</td>
    <td>
    <a class="btn btn-primary" href="{{route('api.edit', $p->id)}}">Editar</a> <br><br>
    <a class="btn btn-danger" href="/api/{{$p->id}}">Excluir</a>
    </td>


</tr>
    @endforeach
</table>
<a class="btn btn-primary" href="/api/create">Novo Registro</a>


@endsection















 <script>
            function getId(){
                var teste = parseInt(document.getElementById("qtdv").value,10);
                var teste2 =parseInt(document.getElementById("preco").value,10);
              //  var total = teste + teste2;
             // alert(teste.value+"+"+teste2.value+"="+total.value);
             // alert(teste);
             // alert(teste2);
             // alert(total);
              document.getElementById('total').value = teste * teste2;

            }

        </script>
