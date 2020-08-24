<html>
    <head>
    <title>Cadastro de usuarios</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src='{{ asset ('js/cep.js')}}'></script>
    </head>

    <body>
    <!-- Inicio do formulario -->

    <form  action="/api/{{$pessoas->id}}" method="post">
        @method("PUT")
        @csrf
        <label>Nome: </label>
        <input name="nome" type="text" id="nome" size="60"  value="{{$pessoas->nome ?? ''}}"/></label><br />
        <label>Telefone: </label>
        <input name="telefone" type="text" id="telefone" size="60"   value="{{$pessoas->telefone ?? ''}}"/><br />
        <label>Cep: </label>
        <input name="cep" type="text" id="cep" size="10" maxlength="9" value="{{$pessoas->cep ?? ''}}"/><br />
        <label>Rua: </label>
        <input name="rua" type="text" id="rua" size="60"   value="{{$pessoas->rua ?? ''}}"/></label><br />
        <label>Bairro: </label>
        <input name="bairro" type="text" id="bairro" size="40"  value="{{$pessoas->bairro ?? ''}}"/><br />
        <label>Cidade: </label>
        <input name="cidade" type="text" id="cidade" size="40"  value="{{$pessoas->cidade ?? ''}}"/><br />
        <label>Estado: </label>
        <input name="uf" type="text" id="uf" size="2"  value="{{$pessoas->uf ?? ''}}" /><br />
        <button type="submit">Salvar</button>
      </form>

    </body>

    </html>

