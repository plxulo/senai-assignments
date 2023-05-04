<?php
  //Incluir a conexão (conecta.php)
  include("conecta.php");

  //Pegar os valores do formulário pelo método POST (pega todos os valores)
  $matricula  = $_POST["matricula"];
  $nome       = $_POST["nome"];
  $idade      = $_POST["idade"];

  //Inserir no banco de dados com pdo
  $comando = $pdo->prepare("INSERT INTO 
  aluno (matricula,nome,idade)
  VALUES ($matricula, '$nome', $idade)");

  $resultado = $comando->execute();

  //Voltar para o arquivo original após enviar
  header("Location: formulario.html")

?>