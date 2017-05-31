<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Integrado de Eventos do MEJ</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>

<!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sistema Integrado de Eventos do MEJ</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">SOBRE</a></li>
            <li><a href="">EVENTOS</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CRIAR CONTA <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="criar_conta_congressista">Congressista</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="criar_conta_organizador">Organizador</a></li>
              </ul>
            </li>
            <li><a href="entrar.php">ENTRAR</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    

    <div class="container">
      <div class="row">
        <div class="col-md-6">

          <div class="page-header">
            <h1>Criar conta <small>Congressista</small></h1>
          </div>

          <form role="form" method="post" action="../controller/CongressistaController.php">

            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" name="nome" class="form-control" id="nome" placeholder="Informe o seu nome">
            </div>
            <div class="form-group">
              <label for="instituicao">Instituição</label>
              <input type="text" name="instituicao" class="form-control" id="instituicao" placeholder="Informe a sua instituição">
            </div>
            <div class="form-group">
              <label for="rg">RG</label>
              <input type="text" name="rg" class="form-control" id="rg" placeholder="Informe o seu RG">
            </div>
            <div class="form-group">
              <label for="CPF">CPF</label>
              <input type="text" name="cpf" class="form-control" id="rg" placeholder="Informe o seu CPF">
            </div>
            <div class="form-group">
              <label for="endereco">Endereço</label>
              <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Informe o seu endereco">
            </div>
            <div class="form-group">
              <label for="complemento">Complemento</label>
              <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Informe o complemento">
            </div>
            <div class="form-group">
              <label for="cidade">Cidade</label>
              <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Informe a cidade">
            </div>
            <div class="form-group">
              <label for="estado">Estado</label>
              <input type="text" name="estado" class="form-control" id="estado" placeholder="Informe a sigla do estado">
            </div>
            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input type="text" name="telefone" class="form-control" id="telefone" placeholder="(99)99999-9999">
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="seu_email@mail.com">
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input type="password" name="senha" class="form-control" id="senha" placeholder="Informe sua senha">
            </div>

            <button type="submit" name="operacao" value="criar_conta_congressista" class="btn btn-default">Criar conta</button>
          </form>
          
        </div>
      </div>
    </div>

<script src="../js/jquery-3.2.1.min.js"></script>    
<script src="../js/bootstrap.min.js"></script>

</body>
</html>