<?php 
  session_start();
  $email=$_SESSION['email'];
	include ("../../controle/db/conexao.php");
   // acentuação
    mysqli_query($conexao,"SET NAMES 'utf8'");  
    mysqli_query($conexao,'SET character_set_connection=utf8');
    mysqli_query($conexao,'SET character_set_client=utf8');
    mysqli_query($conexao,'SET character_set_results=utf8');
    
?>

<!-- Checa no banco de dados se possui dados cadastrados -->
<?php 
  $query="SELECT * FROM tb_doador WHERE email='$email';";
  if($resultado = mysqli_query($conexao, $query)){
    if(mysqli_num_rows($resultado) < 1){ // cadastrar dados caso não possua
      echo "<meta http-equiv='refresh' content='0;url=./adicionarDados.php'>
      <script type='text/javascript'>alert('Cadastre seus dados antes!');
      </script>"; 
    } 
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Agende sua doação!</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <!--<link rel="stylesheet" href="../../css/formulario.css"> -->
    <link rel="stylesheet" href="../../css/agendamento.css">
    <!-- JS -->
    <script src="../../js/script.js" defer></script>
    <!-- JQUERY -->
    <script src="../../js/jquery-3.6.1.min.js" type="text/javascript"></script>
    <script src="../../js/jquery.mask.min.js" type="text/javascript"></script>
    <!-- AJAX -->
    <script type="text/javascript" src="../../js/ajax.js"></script>
    <link rel="icon" type="imagem/png" href="../../imagens/icons8-gota-de-sangue-96.png">


  <script type="text/javascript">
    function dataEhora(){
      var data_consulta=document.getElementById("data_consulta").value;
      var local_consulta=document.getElementById("local_consulta").value;
      var resp_consulta=document.getElementById("resp_consulta").value;
      
      if (data_consulta && local_consulta && resp_consulta !="") {
        document.getElementById("dt_a").value=data_consulta;
        document.getElementById("hr_a").value=resp_consulta;
        document.getElementById("loc_a").value=local_consulta;
      }
    }
  </script>
</head>

<body>
	<div id="container-agendamento">
		<div id="rgba">

        
      <?php
        $busca=mysqli_query($conexao,"SELECT * FROM  tb_doador WHERE email='$email'");
        $row_busca=mysqli_fetch_array($busca);
        $_SESSION['id']=$row_busca['iddoador'];
        $nome=$row_busca['nomeCompleto'];
        $telefone=$row_busca['telefone'];
        $rg=$row_busca['rg'];
        $dt_nasc=$row_busca['dataNascimento'];
      ?>



      <div id="container-a">
        <div id="div-ag" class="bk-azul-escuro box-s">
          <h2 id="title-agendamento">Agendar Doação de Sangue</h2>

  		    <div id="agendamento" class="box-s">

              <form id="form_consulta" method="post" action=""> 
                <label id="title-data-local">Data e Local</label>
                <br><br>
                  <p>
                    <select id="local_consulta" name="local_consulta">
                      <option>Hemocentro HCFMB - Botucatu</option>
                    </select>
                    <input type="date" id="data_consulta" name="data_consulta" required> 
                  </p>

                  <p style="margin: 0;">                   
                    <input type="submit" value="Gerar Horários" id="gerarhr"> <!-- gera o horario através do php e volta a resposta pelo ajax -->
                    <select id="resp_consulta"> <!-- recebe options pelo php --> </select>
                  </p> 
                <button type="button" onclick="dataEhora()" id="ad_local" class="bk-azul-escuro color-white"> Adicionar Local e Data </button>
              </form>

              <form id="form_agendamento" method="post" action="" >
                <!-- exibe data e horario escolhido -->
                <p> 
                  <input type="text" id="dt_a" name="data_agenda" readonly>  
                  <input type="text" id="hr_a" name="horario_agenda" readonly>  
                  <input type="text" id="loc_a" name="local_agenda" readonly>
                </p>

                <br><br>
                <button type="submit" id="agendar" class="bk-azul-escuro color-white">Agendar Doação </button>
                <br> 
                <p id="resp_agenda">  </p> <!-- recebe resposta no php, via ajax -->
              </form>

              <br>
              <div>
                <a href="../../paginas/painel.php">Voltar ao Painel do Doador</a>
              </div>
            </div><!-- agendamento -->
        </div><!-- div-ag -->


        
</body>