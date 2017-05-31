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

  $operacao = $_POST["operacao"];

  if ($operacao == "criar_conta_congressista") {

    $nome = $_POST['nome'];
    $instituicao = $_POST["instituicao"];
    $rg = $_POST["rg"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $congressista = new Congressista();

    $congressista->nome = $nome;
    $congressista->instituicao = $instituicao;
    $congressista->rg = $rg;
    $congressista->cpf = $cpf;
    $congressista->endereco = $endereco;
    $congressista->complemento = $complemento;
    $congressista->cidade = $cidade;
    $congressista->estado = $estado;
    $congressista->email = $email;
    $congressista->senha = $senha;

    $congressista->inserir();
    echo "<meta http-equiv='refresh' content='0;url=../view/principal.php'>"; 
  }
?>


<script src="../js/jquery-3.2.1.min.js"></script>    
<script src="../js/bootstrap.min.js"></script>

</body>
</html>