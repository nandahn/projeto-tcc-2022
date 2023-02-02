<?php

// Adicionar arquivo de conexão com o banco de dados

include_once ("db/conexao.php");
SESSION_START();

// Recuperar dados do formulário 


$email = $_POST['email'];
$senha = sha1("{$_POST['email']}{$_POST['senha']}");

// Verifica se há algum usuário no banco de dados 

$verifica = "SELECT * FROM tb_login  WHERE email = '$email';";

if($resultado = mysqli_query($conexao, $verifica)){
    if(mysqli_num_rows($resultado) > 0 ){ // Existe usuário 
    $row = mysqli_fetch_array($resultado);
    $verifica_senha = $row[3];
    if( $senha == $verifica_senha) {// Testa a senha   
        $_SESSION['email'] = $row[2];       

        echo "<meta http-equiv='refresh' content='0;url=../paginas/painel.php'>
				  <script type='text/javascript'>alert('Bem-vindo $row[1]!');
				  </script>"; 
    } 
    else {
        echo "<meta http-equiv='refresh' content='0;url=../paginas/login.php'>
				  <script type='text/javascript'>alert('Senha Incorreta $row[1]!');
				  </script>";
    }
} 
else { // Caso não haja usuário
    echo "<meta http-equiv='refresh' content='0;url=../paginas/login.php'>
				  <script type='text/javascript'>alert('Usuário não encontrado $row[1]!');
				  </script>";
    }
}

?>