<?php

// Incluir arquivo de conexão com o banco de dados

include_once("db/conexao.php");

// Recuperar os valores do formulário

$username = $_POST['username'];
$senha = sha1("{$_POST['email']}{$_POST['senha']}");
$email = $_POST['email'];
$iddoador = "";

// SQL Insert na tb_login 
    $sql_login = "INSERT INTO tb_login(username, email, senha)
    VALUES ('{$username}', '{$email}', '{$senha}');";
    
    $resultado = mysqli_query($conexao, $sql_login);

    if(mysqli_affected_rows($conexao) != 0){
        echo "<meta http-equiv='refresh' content='0;url=../paginas/login.php'>
		  <script type='text/javascript'>alert('Conta criada com sucesso!');
		  </script>";
    } else { 
        echo "<meta http-equiv='refresh' content='0;url=../paginas/cadastro.php'>
		  <script type='text/javascript'>alert('Não foi possivel criar a conta');
		  </script>";
    }
?>