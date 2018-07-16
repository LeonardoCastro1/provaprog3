<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Prova Pratica</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php include_once 'front/header.php'; ?>
    <section class="formulario">
      <form class="" action="back/bcadContatos.php" method="post">
        <div class="quadro container">
          <div class="quadro-align center">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome" maxlength="50" required>
          </div>

          <div class="quadro-align center">
            <label for="apelido">Apelido</label>
            <input type="text" name="apelido" placeholder="Digite seu apelido" maxlength="45" required>
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
            <input type="submit" name="botão" value="Enviar" class="button">
          </div>

        </div>
      </form>

    </section>

  </body>
</html>
