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
            <h1>Criar conta <small>Organizador</small></h1>
          </div>

          <form role="form" method="post" action="../controller/OrganizadorController.php?operacao=criar_conta_organizador">
            <div class="form-group">
              <label for="instituicao">Instituição</label>
              <input type="text" name="instituicao" class="form-control" id="instituicao" placeholder="Informe a sua instuituicao">
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="seu_email@mail.com">
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input type="password" name="senha" class="form-control" id="senha" placeholder="Informe sua senha">
            </div>


            <div class="radio">
              <label>
                <input type="radio" name="tipoInstituicao" value="Empresa Junior">Empresa Júnior
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="tipoInstituicao" value="Nucleo">Núcleo
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="tipoInstituicao" value="Federacao">Federação
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="tipoInstituicao" value="Confederacao">Confederação
              </label>
            </div>
            <button type="submit" name="operacao" value="criar_conta_organizador" class="btn btn-default">Criar conta</button>
          </form>
          
        </div>
      </div>
    </div>

<script src="../js/jquery-3.2.1.min.js"></script>    
<script src="../js/bootstrap.min.js"></script>

</body>
</html>