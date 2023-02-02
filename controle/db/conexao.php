<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_doacao";

    // Cria a Conexão 

    $conexao = mysqli_connect($host, $username, $password, $dbname);

    // Testa a Conexão 

    if(!$conexao){
        die("Erro na conexão com o banco de dados" . mysqli_connect_error());
    }
?>