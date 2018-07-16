<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Prova Pratica</title>

    <script src="js/script.js" charset="utf-8"></script>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php include_once 'front/header.php'; ?>
    <section class="formulario">
      <form class="" action="back/bcadInfo.php" method="post">
        <div class="quadro container">
          <div class="quadro-align center">
            <label for="usuario">Escolha o usuario</label>
            <select name="usuario" >
              <option>Selecione um Usuário</option>
              <?php
                require_once ('back/conecta.php');
                $query = "select * from contatos";
                $result = $conn->query($query) or die($conn->error);
                while($dados = $result->fetch_array()) {
                  echo "<option value=".$dados['idContatos'].">";
                  echo $dados['nome'];
                  echo "</option>";
                }
               ?>
            </select>
          </div>

          <div class="quadro-align center">
            <label for="tipo">Tipo</label>
            <select id="tipo" name="tipo" onchange="selectTipo(this)" >
              <option>Selecione um tipo</option>
              <option value="1" >E-mail</option>
              <option value="2">Telefone</option>
              <option value="3">Aniversário</option>
              <option value="4">Endereco</option>
            </select>
          </div>

          <div id="email" class="quadro-align center">
            <label for="email">Digite o E-mail</label>
            <input type="email" name="email" placeholder="Digite o seu Email">
          </div>

          <div id="telefone" class="quadro-align center">
            <label for="telefone">Digite o Telefone</label>
            <input type="text" name="telefone" placeholder="Digite o seu Telefone">
          </div>

          <div id="aniversario" class="quadro-align center">
            <label for="aniversario">Insira o Aniversário</label>
            <input type="date"  name="aniversario" placeholder="Digite o seu Aniversário">
          </div>

          <div id="endereco" class="quadro-align center">
            <label for="endereco">Digite o Endereço</label>
            <input type="text" name="endereco" placeholder="Digite o seu Endereco">
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
