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

        <div class="col-md-6">

          <div class="page-header">
            <h1>Cadastrar Ingresso <br/><small><?php echo $_GET['nome_evento'];?></small></h1>
          </div>

          <form role="form" method="post" action="../controller/TipoIngressoController.php">
            <input type="hidden" name="id_evento" value="<?php echo $_GET['id_evento'];?>">
            <div class="form-group">
              <label for="descricao">Descrição</label>
              <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Informe a descrição do ingresso">
            </div>
            <div class="form-group">
              <label for="valor">Valor</label>
              <input type="number" name="valor" class="form-control" id="valor" placeholder="R$ 0,00">
            </div>
            <div class="form-group">
              <label for="vagas">Vagas</label>
              <input type="number" name="vagas" class="form-control" id="vagas" placeholder="00">
            </div>
            <div class="form-group">
              <label for="detalhes">Detalhes</label>
              <input type="text" name="detalhes" class="form-control" id="detalhes" placeholder="Informe os detlhes do ingresso">
            </div>
            <button type="submit" name="operacao" value="cadastrar_tipo_ingresso" class="btn btn-default">Cadastrar</button>
          </form>
          
        </div>
      </div>
    </div>

<script src="../js/jquery-3.2.1.min.js"></script>    
<script src="../js/bootstrap.min.js"></script>

</body>
</html>