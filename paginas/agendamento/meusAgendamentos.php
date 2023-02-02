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
	<title>Meus Agendamentos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->

    <link rel="stylesheet" href="../../css/agendamento2.css">
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
<!-- ______________________________________________Menu ________________________________________________________ -->

<header>
        <nav class="nav-bar">
            
            <div class="logo">
                <img src="../imagens/icons8-gota-de-sangue-96.png" alt="">
                
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="../../paginas/painel.php" class="nav-link">Voltar ao painel do doador</a></li>

                </ul>
            </div>

    </header>


<!-- _________________________________________________________________________________________________________ -->


<body>

    <div id="div-todos" class="box-s bk-azul-escuro ">
            <h3 id="title">Meus Agendamentos</h3>
              <?php 
                $sel_agenda=mysqli_query($conexao,"SELECT * FROM tb_agendamento INNER JOIN tb_doador ON (tb_agendamento.iddoador=tb_doador.iddoador) where tb_doador.email='$email' order by tb_agendamento.codigo desc");  
                if ($sel_agenda->num_rows>0) {
                  while($row_agenda=mysqli_fetch_array($sel_agenda)){ 
                    $id_agenda=$row_agenda['codigo'];
                    $status=$row_agenda['statusAgendamento'];
              ?>

                <div class="card">
                  <p class="frase destaque">Banco de Sangue: <?php echo $row_agenda['hemocentro'].' - <span id="cor">'. $status .'</span>'; ?></p>
                  <p class="espaco destaque"><?php echo date('d/m/Y', strtotime($row_agenda['dataAgendamento'])); ?> </p> 
                  <p class="frase"><span class="destaque">RG:</span> <?php echo $row_agenda['rg']; ?> </p>
                  <p class="frase"><span class="destaque">Nome:</span> <?php echo $row_agenda['nomeCompleto']; ?> </p>
                  <p class="frase"><span class="destaque">Telefone:</span> <?php echo $row_agenda['telefone']; ?> </p>
                  <p class="frase"><span class="destaque">Data de Nascimento:</span> <?php echo date('d/m/Y', strtotime($row_agenda['dataNascimento'])); ?> </p>
                    <?php   
                      if($status=="Agendado") {
                    ?>
                      <form method="post" action="" id="form_cancel" onsubmit='return confirm("Realmente deseja cancelar o agendamento?")'>
                        <input type="hidden" name="id_agenda" value=<?php echo $id_agenda?> />
                        <input type="submit" name="del_mensagem" class="cancel_cons" id="button-cancelar" value="Cancelar Agendamento">
                      </form> 
                    <?php
                      } //if($status=="Agendado")
                    ?>
                </div><!-- card -->

            <?php
              } // fecha o while mysqli_fetch_array
            } // fecha o if num_rows
            else{
              echo "<h2 class='inexistente'> Não há nenhum agendamento!</h2>";
            }   ?>
          </div><!--  div-todos -->
        </div><!-- container-a -->

      </div><!-- rgba -->
    </div><!-- container-agen -->

</body>
</html>