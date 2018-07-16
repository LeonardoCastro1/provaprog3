<?php
  session_start();
  require_once ('conecta.php');

  $nome = $_GET['nome'];
  $apelido = $_GET['apelido'];
  $i=0;
  $id = array();
  $nomeArray = array();
  $apelidoArray= array();

  // echo $nome;
  // echo $apelido;

  if (strlen($nome) == 0 and strlen($apelido) == 0) {
    $busca="select * from contatos";
    $result = $conn->query($busca) or die($conn->error);
    while($dados = $result->fetch_array()) {
    $id[$i] = $dados['idContatos'];
    $nomeArray[$i] = $dados['nome'];
    $apelidoArray[$i] = $dados['apelido'];
    $i++;

    }
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nomeArray;
    $_SESSION['apelido'] = $apelidoArray;
    header("Location: ../busca.php");
  }

  if (strlen($nome) > 0 and strlen($apelido) == 0) {
    $busca="select * from contatos where nome like '$nome%'";
    $result = $conn->query($busca) or die($conn->error);
    $_SESSION['busca'] = $result;
    while($dados = $result->fetch_array()) {
    $id[$i] = $dados['idContatos'];
    $nomeArray[$i] = $dados['nome'];
    $apelidoArray[$i] = $dados['apelido'];
    $i++;

    }
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nomeArray;
    $_SESSION['apelido'] = $apelidoArray;
    header("Location: ../busca.php");
  }

  if (strlen($nome) == 0 and strlen($apelido) > 0) {
    $busca="select * from contatos where apelido like '$apelido%'";
    $result = $conn->query($busca) or die($conn->error);
    while($dados = $result->fetch_array()) {
    $id[$i] = $dados['idContatos'];
    $nomeArray[$i] = $dados['nome'];
    $apelidoArray[$i] = $dados['apelido'];
    $i++;

    }
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nomeArray;
    $_SESSION['apelido'] = $apelidoArray;
    header("Location: ../busca.php");
  }

?>
