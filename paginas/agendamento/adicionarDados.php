<?php

session_start();
include ("../../controle/db/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/formulario.css">
    <script src="../../js/script.js" defer></script>
    <script src="../../js/jquery-3.6.1.min.js" type="text/javascript"></script>
    <script src="../../js/jquery.mask.min.js" type="text/javascript"></script>
    <link rel="icon" type="imagem/png" href="../imagens/icons8-gota-de-sangue-96.png">

    <!-- Máscara de campos do formulário -->
    <script type="text/javascript">
      $(document).ready(function(){
        $("#cpf").mask("000.000.000-00");
        $("#rg").mask("00.000.000-A");
        $("#cep").mask("00000-000");
        $("#telefone").mask("(00) 0000-00000");
      })
    </script>
    <title>Adicionar Dados Pessoais</title>
</head>
<body>
<form action="../../controle/processa_dados.php" class="form" method="POST">
      <h1 class="text-center">Adicionar Dados</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>

        <div
          class="progress-step progress-step-active"
          data-title="Dados pessoais"
        ></div>
        <div class="progress-step" data-title="Endereço"></div>
        <div class="progress-step" data-title="Dados sanguíneos"></div>

      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="nome">Nome completo</label>
          <input type="text" name="nome" id="nome" />
        </div>

        <div class="input-group">
          <label for="telefone">Telefone Para Contato</label>
          <input type="text" name="telefone" id="telefone" />
        </div>


        <div class="input-group">
          <label for="cpf">CPF</label>
          <input type="text" name="cpf" id="cpf" />
        </div>

        <div class="input-group">
          <label for="rg">RG</label>
          <input type="text" name="rg" id="rg" />
        </div>

        <div class="input-group">
          <label for="nomePai">Nome do pai</label>
          <input type="text" name="nomePai" id="nomePai" />
        </div>

        <div class="input-group">
          <label for="nomeMae">Nome da mãe</label>
          <input type="text" name="nomeMae" id="nomeMae" />
        </div>

        <div class="input-group">
          <label for="dataNascimento">Data de Nascimento</label>
          <input type="date" name="dataNascimento" id="dataNascimento" />
        </div>

        <div class="input-group">
          <select name="sexo">
            <option  for="sexo" id="sexo" value="F" >Feminino</option>
            <option  for="sexo" id="sexo" value="M" >Masculino</option>
            </option>

          </select>

        </div>

        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Próximo</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="cep">CEP </label>
          <input type="text" name="cep" id="cep" />
        </div>

        <div class="input-group">
          <p>Estado</p>
          <select name="estado">
            <option name="estado" id="sp" value='sp'>São Paulo</option>
          </select>
        </div>
        <div class="input-group">
          <label for="cidade">Cidade</label>
          <input type="text" name="cidade" id="cidade" />
        </div>
        <div class="input-group">
          <label for="bairro">Bairro</label>
          <input type="text" name="bairro" id="bairro" />
        </div>
        <div class="input-group">
          <label for="endereco">Endereço</label>
          <input type="text" name="endereco" id="endereco" />
        </div>
        <div class="input-group">
          <label for="numero">Número</label>
          <input type="text" name="numero" id="numero" />
        </div>
     
        <div class="input-group">
          <label for="complemento">Complemento</label>
          <input type="text" name="complemento" id="complemento" />
        </div>

        <div class="btns-group">
          <a href="#" class="btn btn-prev">Voltar</a>
          <a href="#" class="btn btn-next">Próximo</a>
        </div>
      </div>

      <div class="form-step">
        <div class="input-group">
          <p>Tipo sanguíneo</p>
          <div class="input-group">
          <select name="tipoSangue">
            <option for="sexo" id="tipoSangue">A</option>
            <option for="tipoSangue" id="tipoSangue">B</option>
            <option for="tipoSangue" id="tipoSangue">AB</option>
            <option for="tipoSangue" id="tipoSangue">O</option>
            <option for="tipoSangue" id="tipoSangue">Não sei</option>
            </option>

          </select>

        </div>
          <p>Fator RH</p>
          <select name="fatorRH">
            <option name="fatorRH" for="fatorRH" id="fatorRH">+ Positivo</option>
            <option name="fatorRH"for="fatorRH" id="fatoRHh">- Negativo</option>
            <option name="fatorRH"for="fatorRH" id="fatoRHh">Não sei</option>
          </select>
        </div>

        <div class="btns-group">
          <a href="#" class="btn btn-prev">Voltar</a>
          <input type="submit" value="Adicionar dados" class="btn" />
        </div>
      </div>
      <div class="form-step">
       
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Voltar</a>
         
      </div>
    </form>
    </div>
</body>
</html>