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
  include "../model/ConexaoDB.class.php";
  include "../model/Congressista.class.php";
  include "../model/Organizador.class.php";

  $operacao = $_POST["operacao"];

  if ($operacao == "entrar") {

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $tipo = $_POST["tipo"];

    if($tipo == "Congressista") {

        $congressista = new Congressista();

        $congressista->email = $email;
        $congressista->senha = $senha;
        $res = $congressista->entrar();
       
        if($res) {
          while($linha=mysqli_fetch_assoc($res)){
              $id = $linha['id'];
              $nome=$linha['nome'];
          }
          session_start();
          $_SESSION['usuario'] = $nome;
          $_SESSION['id_usuario'] = $id;
          $_SESSION['tipo_usuario'] = $tipo;
          echo "<meta http-equiv='refresh' content='0;url=../view/meus_eventos.php'>"; 
        }
        
    }

    elseif($tipo == "Organizador") {

        $organizador = new Organizador();

        $organizador->email = $email;
        $organizador->senha = $senha;
        $res = $organizador->entrar();
       
        if($res) {
          while($linha=mysqli_fetch_assoc($res)){
              $id = $linha['id'];
              $instituicao=$linha['instituicao'];
          }
          session_start();
          $_SESSION['usuario'] = $instituicao;
          $_SESSION['id_usuario'] = $id;
          $_SESSION['tipo_usuario'] = $tipo;
          echo "<meta http-equiv='refresh' content='0;url=../view/meus_eventos.php'>"; 
        }
    }
  }
?>


<script src="../js/jquery-3.2.1.min.js"></script>    
<script src="../js/bootstrap.min.js"></script>

</body>
</html>