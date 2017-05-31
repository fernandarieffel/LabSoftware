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
  include "../model/Evento.class.php";

  $operacao = $_POST["operacao"];

  if ($operacao == "cadastrar_evento") {

    $nome = $_POST['nome'];
    $descricao = $_POST["descricao"];

    $evento = new Evento();

    $evento->id_organizador = $_POST['id_organizador'];
    $evento->nome = $nome;
    $evento->descricao = $descricao;

    $evento->inserir();
    echo "<meta http-equiv='refresh' content='0;url=../view/principal.php'>"; 
  }

?>


<script src="../js/jquery-3.2.1.min.js"></script>    
<script src="../js/bootstrap.min.js"></script>

</body>
</html>