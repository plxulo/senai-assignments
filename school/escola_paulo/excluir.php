<?php

  include("conecta.php");

  //Pegar apenas o valor da variável m que foi enviado no script contido no formulario.html
  $matricula  = $_GET["m"];

  //Excluir do banco de dados
  $comando = $pdo->prepare("DELETE FROM aluno
  WHERE matricula=$matricula");

  $resultado = $comando->execute();

  //voltar para o arquivo original após enviar
  header("Location: formulario.html")

?>