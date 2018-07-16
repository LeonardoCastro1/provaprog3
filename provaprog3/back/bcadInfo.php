<?php
  session_start();
  $_SESSION['erro']="";
  require_once ('conecta.php');

  $idCliente = $_POST['usuario'];
  $idTipo = $_POST['tipo'];
  $tipo;
  $valor;

  if ($idTipo==1) {
    $tipo = 'email';
    $valor= $_POST['email'];

  }elseif ($idTipo==2) {
    $tipo = 'telefone';
    $valor= $_POST['telefone'];

  }elseif ($idTipo==3) {
    $tipo = 'aniversario';
    $valor= $_POST['aniversario'];

  }elseif ($idTipo==4) {
    $tipo = 'endereco';
    $valor = $_POST['endereco'];
  }else {
    header("Location: ../cadInfo.php");
  }

  $verifica = "select * from informacoes where (tipo = 'email' or tipo = 'telefone') and valor = '$valor'";
  $result = $conn->query($verifica) or die($conn->error);

  if (mysqli_num_rows($result)>0) {
    $_SESSION['erro'] = "Valor Existente";
    header("Location: ../cadInfo.php");

  }else{
    $insere = $conn->prepare("INSERT INTO informacoes (tipo, valor, idContatos) VALUES (?, ?, ?)");
    $insere->bind_param("sss",$tipo, $valor, $idCliente);
    if ($insere->execute()){
      session_start();
      $_SESSION['erro'] = "";
      header("Location: ../cadInfo.php");
    } else {
      session_start();
      $_SESSION['erro'] = "erro no banco de dados. ".$conn->error;
      header("Location: cadInfo.php");
    }
  }
 ?>
