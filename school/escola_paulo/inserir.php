<?php

  include("conecta.php");

  $matricula  = $_POST["matricula"];
  $nome       = $_POST["nome"];
  $idade      = $_POST["idade"];

  $comando = $pdo->prepare("INSERT INTO 
  aluno (matricula,nome,idade)
  VALUES ($matricula, '$nome', $idade)");

  $resultado = $comando->execute();

  //voltar para o arquivo original após enviar
  header("Location: formulario.html")

?>