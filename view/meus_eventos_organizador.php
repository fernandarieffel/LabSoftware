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

<?php    
     session_start();
     $usuario = null;

     if(isset($_SESSION['usuario'] ) and isset($_SESSION['id_usuario'])){
       $usuario = $_SESSION['usuario'];
       $mensagem = "Olá ";
     } else {
      $usuario = 'ENTRAR';
      $mensagem = null;
     }
    ?>

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
                <li><a href="criar_conta_congressista.php">Congressista</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="criar_conta_organizador.php">Organizador</a></li>
              </ul>
            </li>
            <li><a href="entrar.php"><?php echo $mensagem, $usuario;?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

    	<div class="row">

        <div class="page-header">
          <h1 class="text-center">Meus Eventos</h1>
        </div>

<?php
  include "../model/ConexaoDB.class.php";
  include "../model/Evento.class.php";
  
  $evento = new evento();

  $res = $evento->listarPorOrganizador($_SESSION['id_usuario']);

  while($linha = mysqli_fetch_assoc($res)) {
    $id = $linha['id'];
    $nome = $linha['nome'];
    $descricao = $linha['descricao'];

    echo '<div class="col-md-6">';
    echo '<div class="jumbotron evento">';
    echo '<h3>'.$nome.'</h3>';
    echo '<p>25 a 28 de maio</p>';
    echo '<p><a class="btn btn-primary" href="evento.php?id='.$id.'" role="button">Inscrever-se</a></p>';
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