<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Integrado de Eventos do MEJ</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
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
    echo "<meta http-equiv='refresh' content='0;url=../view/entrar.php'>"; 
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

        <div class="page-header">
          <h1 class="text-center">Meus Eventos</h1>
        </div>

<?php
  include "../model/ConexaoDB.class.php";
  include "../model/Evento.class.php";
  include "../model/TipoIngresso.class.php";
  
  $evento = new Evento();
  $res = $evento->listarEventoById($_GET['id']);

  while($linha = mysqli_fetch_assoc($res)) {
    $id_evento = $linha['id'];
    $nome = $linha['nome'];
    $descricao = $linha['descricao'];

    echo '<div class="col-md-12">';
    echo '<div class="jumbotron">';
    echo '<h3>'.$nome.'</h3>';
    echo '<p>'.$descricao.'</p>';
    //inicio form
    echo '<form role="form" method="post" action="../controller/InscricaoController.php">';
    echo '<input type="hidden" name="id_usuario" value="'.$id_usuario.'">';
    $tipoIngresso = new TipoIngresso();
    $ingressos = $tipoIngresso->listarTipoIngressoByIdEvento($id_evento);

    while ($li = mysqli_fetch_assoc($ingressos)) {
      $id_tipo_ingresso = $li['id'];
      $desc = $li['descricao'];
      $valor = $li['valor'];
      echo '<div class="radio">
              <label>
                <input type="radio" name="id_tipo_ingresso" value="'.$id_tipo_ingresso.'">'.$desc.' R$ '.$valor.'
              </label>
            </div>';
      echo "id tipo ingresso $id_tipo_ingresso";
    }
    if ($tipo_usuario == 'Congressista' && $li != null) {
      echo '<button type="submit" name="operacao" value="inscrever-se" class="btn btn-primary">inscrever-se</button>';
    }
    echo '</form>';
    //fim form
    echo '</div>';
    echo '</div>';
    } 
?>

    	</div>
    </div>

    

<script src="../js/jquery-3.2.1.min.js"></script>    
<script src="../js/bootstrap.min.js"></script>
</body>
</html>