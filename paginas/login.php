

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/login.css" />
    <link rel="icon" type="imagem/png" href="../imagens/icons8-gota-de-sangue-96.png">
    <title>Entrar</title>
  </head>
  <body>

      <div class="form">
        <form action="../controle/processa_login.php" method="POST">
          <div class="form-header">
            <div class="title">
              <h1>Entrar na sua conta</h1>
            </div>

          </div>

          <div class="input-group">
            <div class="input-box">
              <!-- Inicio input-box -->
              <label for="email">Endereço de E-mail</label>
              <input id="email" type="email" name="email" placeholder="ex: email@dominio.com"/>
            
            </div>
            <!-- Fim da input-box -->
            <div class="input-box">
              <!-- Inicio input-box -->
              <label for="senha">Senha</label>
              <input id="senha" type="password" name="senha" placeholder="Digite sua senha"/>
            </div>
            <!-- Fim da input-box -->
          </div>

          <div class="btn-entrar">
            <input type="submit" value="Entrar">
          </div>
    
          <div class="btn-criarConta">
             <span>Não possui uma conta? <a href="cadastro.php">Criar conta</a></span>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
