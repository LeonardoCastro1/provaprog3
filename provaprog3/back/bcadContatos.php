<?php
  require_once ('conecta.php');

  $nome =  $_POST['nome'];
  $apelido = $_POST['apelido'];

  $insere = $conn->prepare("INSERT INTO contatos (nome, apelido) VALUES (?, ?)");
  $insere->bind_param("ss",$nome, $apelido);
  if ($insere->execute()){
    session_start();
    $_SESSION['erro'] = "";
     header("Location: ../index.php");
  } else {
     session_start();
     $_SESSION['erro'] = "erro no banco de dados. ".$conn->error;
     header("Location: index.php");
  }
 ?>
