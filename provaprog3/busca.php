<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Prova Pratica</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php include_once 'front/header.php'; ?>
    <section class="formulario">
      <form class="" action="back/bbusca.php" method="get">
        <div class="quadro container">
          <div class="quadro-align center">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome" maxlength="50">
          </div>

          <div class="quadro-align center">
            <label for="apelido">Apelido</label>
            <input type="text" name="apelido" placeholder="Digite seu apelido" maxlength="45">
          </div>

          <div class="center">
            <?php
              session_start();
              if (isset($_SESSION['erro'])) {
                echo $_SESSION['erro'];
              }

             ?>
          </div>

          <div class="center">
            <input type="submit" name="botão" value="Buscar" class="button" onclick="ativaFormBusClient()">
          </div>

        </div>
      </form>

      <div id="buscaContatos" class="quadro container">
        <div class="quadro-align">
          <table border="1">
            <head>
              <td>ID</td>
              <td>Nome</td>
              <td>Apelido</td>
            </head>

            <body>
              <?php

                if (isset($_SESSION['id'])) {
                  $id = $_SESSION['id'];
                  $nomeArray = $_SESSION['nome'];
                  $apelidoArray = $_SESSION['apelido'];
                  $tam = count($id);
                  for ($i=0; $i < $tam; $i++) {
                    echo "<tr>";
                    echo "<td>".$id[$i]."</td>";
                    echo "<td>".$nomeArray[$i]."</td>";
                    echo "<td>".$apelidoArray[$i]."</td>";
                    echo "</tr>";
                    // $id = $_SESSION['id'];
                    // for ($i=0; $i < 3 ; $i++) {
                    //   echo $id[$i];
                    }

                }

              ?>


            </body>
          </table>
        </div>
      </div>

    </section>

  </body>
</html>
