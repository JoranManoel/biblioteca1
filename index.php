<?php 

    session_start();

    if(!$_SESSION['email']){
        header('Location: login.php');
    }

    include "conexao.php";

?>

<h1>Bem vindo, <?= $_SESSION['nome'] ?>!</h1>

<a href="leitor/listar.php">Leitor</a>
<br><br>
<a href="logout.php">Sair</a>