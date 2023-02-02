

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/cadastro.css" />
    <link rel="icon" type="imagem/png" href="../imagens/icons8-gota-de-sangue-96.png">
    <title>Criar Conta</title>
  </head>
  <body>
    <div class="container">
      <div class="form-img">
        <img src="../imagens/undraw_medicine_b-1-ol.svg" alt="" />
      </div>

      <div class="form">
        <form action="../controle/processa_cadastro.php" method="POST">
          <div class="form-header">
            <div class="title">
              <h1>Criar Nova Conta</h1>
            </div>
            
            <div class="login-button">

              <button>
                <a href="login.php">Login</a>
              </button>
            </div>
          </div>

           <div class="input-group">
            <div class="input-box">
              <!-- Inicio input-box -->
              <label for="username">Nome de Usuário</label>
              <input id="username" type="text" name="username" placeholder="seu melhor nome de usuário" required/>
            
            </div>

          <div class="input-group">
            <div class="input-box">
              <!-- Inicio input-box -->
              <label for="email">Endereço de E-mail</label>
              <input id="email" type="email" name="email" placeholder="ex: seu melhor e-mail" required/>
            
            </div>
            <!-- Fim da input-box -->
            <div class="input-box">
              <!-- Inicio input-box -->
              <label for="senha">Senha</label>
              <input id="senha" type="password" name="senha" placeholder="sua melhor senha"required />
            </div>
            <!-- Fim da input-box -->
          </div>

            <div class="input-box">
              <!-- Inicio input-box -->
              <label for="senha">Confirmar Senha</label>
              <input id="senha" type="password" name="senha" placeholder="confirmar senha" required/>
            </div>
            <!-- Fim da input-box -->
          </div>

          <div class="continue-button">
            <input type="submit" name="submit" id="submit" value="Criar Conta" >
          </div>

        </form>
      </div>
    </div>
  </body>
</html>
