<?php

	include "db/conexao.php";

	  $id_agenda=$_POST["id_agenda"]; 

	  $insert_can="UPDATE `tb_agendamento` SET `statusAgendamento`='Cancelado' WHERE `codigo`=$id_agenda";
	  $query_can=mysqli_query($conexao, $insert_can);

	  if ($query_can>0) {
	 	echo "Agendamento Cancelado com sucesso!";
	  }
	  else{
	  	echo "Não foi possível realizar o cancelamento!";
	  }
?>
