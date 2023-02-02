<?php

include_once('../controle/db/conexao.php');
session_start();
if(!isset($_SESSION['email'])){
    session_destroy();
    header('Location: login.php');
} else {
    
}



$logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/painel.css">
    <title>Painel do Doador</title>
</head>

<body>
    <header>
        <nav class="nav-bar">
            
            <div class="logo">
                <div class="title-nav">
                    <img src="../imagens/icons8-gota-de-sangue-96.png"><span id="titulo">Painel do Doador</span>
                </div>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="../paginas/front-end/index.php" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="../paginas/front-end/duvidas.php" class="nav-link">Dúvidas</a></li>
                    <li class="nav-item"><a href="../paginas/front-end/criterios.php" class="nav-link">Critérios para doação</a></li>
                </ul>
            </div>

    </header>

    <main>

        <div class="container-1">
            
            <div class="img-1">
                <img src="../imagens/Group 1.png" alt="">
                
            </div>

            <div class="msg-1">
                <?php
                    echo "<h3>Bem-vindo(a) <u>$logado</u><h3>";
                ?>             
            </div>

            <div class="button-sair">
                <a href="../controle/logout.php" id="sair">SAIR</a>
             </div>
        </div>

        <div class="container-2">
            <div class="img-2">
                <img src="../imagens/Vector-4.png" alt="" id="img-2-2">
            </div>

            <div class="txt-1">
                <a href="agendamento/agendamento.php">Agendar Doação</a>
            </div>

            <div class="img-3">
                <img src="../imagens/Vector.png" alt="">
            </div>

            <div class="txt-2">
                <a href="agendamento/meusAgendamentos.php">Meus Agendamentos</a>
            </div>
        </div>

    </main>

</body>
</html>