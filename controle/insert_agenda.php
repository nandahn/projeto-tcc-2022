<?php

	include "db/conexao.php";
	session_start();
	$email=$_SESSION['email'];
	$iddoador=$_SESSION['id'];


	$data_agenda=$_POST["data_agenda"];
	$horario_agenda=$_POST["horario_agenda"]; 
	$local_agenda=$_POST["local_agenda"]; 
	// _________________________________________________

	

	// Faz a inserção do agendamento CASO o doador já tenha cadastrado seus dados no banco 
	$insert_ag="insert into tb_agendamento (dataAgendamento,hora,statusAgendamento,hemocentro,iddoador) values ('$data_agenda', '$horario_agenda', 'Agendado', '$local_agenda', '$iddoador')"; 
	$query2=mysqli_query($conexao, $insert_ag);


		if ($query2>0) {
			echo "<span style='font-size: 13px; font-weight: bold;'>Agendamento feito com sucesso!</span>";
		}
		else{
			echo "<span style='font-size: 13px; font-weight: bold;'>Não foi possível realizar o agendamento!</span>";
		}
?>
