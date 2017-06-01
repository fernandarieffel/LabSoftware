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

<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="principal.php">Sistema Integrado de Eventos do MEJ</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="principal.php">INÍCIO</a></li>
            <li><a href="">SOBRE</a></li>
            <li><a href="">EVENTOS</a></li>
            
<?php    
  session_start();
  $usuario = null;
  $id_usuario = null;
  $tipo_usuario = null;

  if(isset($_SESSION['usuario'] ) and isset($_SESSION['id_usuario'])){
    $usuario = $_SESSION['usuario'];
    $id_usuario = $_SESSION['id_usuario'];
    $tipo_usuario = $_SESSION['tipo_usuario'];
    echo '<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OLÁ <b>'.$usuario.'</b> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="meus_eventos.php">MEUS EVENTOS</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>';
    echo '<li><a href="../controller/SairController.php?sair=true">SAIR</a></li>';
  }

  else {
    echo '<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CRIAR CONTA <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="criar_conta_congressista.php">Congressista</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="criar_conta_organizador.php">Organizador</a></li>
              </ul>
            </li>';
    echo '<li><a href="entrar.php">ENTRAR</a></li>';
  }
?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <div class="container">

      <div class="row">
        <h3 class="text-right"><?php echo $tipo_usuario;?></h3>

        <div class="col-md-4">

          <div class="page-header">
            <h1>Entrar</h1>
          </div>

          <form role="form" method="post" action="../controller/EntrarController.php">

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
                <input type="radio" name="tipo" value="Congressista">Congressista
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="tipo" value="Organizador">Organizador
              </label>
            </div>

            <button type="submit" name="operacao" value="entrar" class="btn btn-default">Entrar</button>
          </form>
          
        </div>
      </div>
    </div>


    

<script src="../js/jquery-3.2.1.min.js"></script>    
<script src="../js/bootstrap.min.js"></script>

</body>
</html>