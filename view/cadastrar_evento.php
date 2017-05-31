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

<?php    
     session_start();
     $usuario = null;
     $mensagem = null;
     $id_usuario = null;

     if(isset($_SESSION['usuario'] ) and isset($_SESSION['id_usuario'])){
       $usuario = $_SESSION['usuario'];
       $mensagem = "Olá ";
       $id_usuario = $_SESSION['id_usuario'];
     } else {
      $usuario = 'ENTRAR';
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
        <div class="col-md-6">

          <div class="page-header">
            <h1>Cadastrar Evento</h1>
          </div>

          <form role="form" method="post" action="../controller/EventoController.php">
            <input type="hidden" name="id_organizador" value="<?php echo $id_usuario?>">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" name="nome" class="form-control" id="nome" placeholder="Informe o seu nome">
            </div>
            <div class="form-group">
              <label for="descricao">Descrição</label>
              <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Informe a descrição">
            </div>
            <button type="submit" name="operacao" value="cadastrar_evento" class="btn btn-default">Cadastrar Evento</button>
          </form>
          
        </div>
      </div>
    </div>

    

<script src="../js/jquery-3.2.1.min.js"></script>    
<script src="../js/bootstrap.min.js"></script>
</body>
</html>