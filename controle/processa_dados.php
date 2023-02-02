<?php

// Adicionar arquivo de conexão com o banco de dados 
session_start();
include_once("db/conexao.php");

//Recuperar os valores do formulário

$nomeCompleto = $_POST['nome'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$nomePai = $_POST['nomePai'];
$nomeMae = $_POST['nomeMae'];
$dataNascimento = $_POST['dataNascimento'];
$sexo = $_POST['sexo'];
$tipoSangue = $_POST['tipoSangue'];
$fatorRH = $_POST['fatorRH'];
$email = $_SESSION['email'];

// Variaveis de endereco 

$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];

$iddoador = "";

// Insert na tabela doador 

    $sql_doador = "insert into tb_doador(nomeCompleto, telefone, cpf, rg, nomePai, nomeMae, dataNascimento, sexo, tipoSangue, fatorRH, email)
    values ('$nomeCompleto', '$telefone', '$cpf', '$rg', '$nomePai', '$nomeMae', '$dataNascimento', '$sexo', '$tipoSangue', '$fatorRH', '$email');";

    $resultado = mysqli_query($conexao, $sql_doador);

    if ($resultado)
      $iddoador = mysqli_insert_id($conexao);
      

    // SQL Endereço

    $sql_endereco = "insert into tb_endereco (cep, cidade, bairro, endereco, numero, complemento, iddoador) 
    values('$cep', '$cidade', '$bairro', '$endereco', '$numero', '$complemento',$iddoador);";


    $resultado_endereco = mysqli_query($conexao, $sql_endereco);

	if(mysqli_affected_rows($conexao) != 0 ){//OK
		echo "<meta http-equiv='refresh' content='0;url=../paginas/agendamento/agendamento.php'>
		  <script type='text/javascript'>alert('Dados adicionados com sucesso');
		  </script>";
	} else {//erro
		echo "<meta http-equiv='refresh' content='0;url=../paginas/painel.php'>
		  <script type='text/javascript'>alert('Erro ao adicinar dados!');
		  </script>";
	}

    



?>