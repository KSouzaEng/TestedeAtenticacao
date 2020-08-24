<html>
    <head>
    <title>Cadastro de usuarios</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src='{{ asset ('js/cep.js')}}'></script>
    </head>

    <body>
    <!-- Inicio do formulario -->
    <h3>Cadastro de Usuarios</h3>
      <form action="/api" method="post" >
        @csrf
        <label>Nome:
        <input name="nome" type="text" id="nome" size="60"  value="{{$pessoas->nome ?? ''}}"/></label><br />
        <label>Telefone:
        <input name="telefone" type="text" id="telefone" size="60"   value="{{$pessoas->telefone ?? ''}}"/></label><br />
        <label>Cep:
        <input name="cep" type="text" id="cep" size="10" maxlength="9"
               onblur="pesquisacep(this.value);"  value="{{$pessoas->cep ?? ''}}"/></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60"   value="{{$pessoas->rua ?? ''}}"/></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40"  value="{{$pessoas->bairro ?? ''}}"/></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40"  value="{{$pessoas->cidade ?? ''}}"/></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2"  value="{{$pessoas->uf ?? ''}}" /></label><br />
        <button type="submit">Salvar</button>
      </form>

    </body>

    </html>

