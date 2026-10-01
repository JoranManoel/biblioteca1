<?php

include "conexao.php";

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM leitor WHERE email = '$email' AND senha = '$senha'";

    $resultado = $conn->query($sql)->fetch_assoc();

    if ($resultado) {
        session_start();
        $_SESSION['email'] = $resultado['email'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['id'] = $resultado['id'];
        header('Location: index.php');
    } else {
        echo "Erro ao logar";
    }
}

?>
<h1>LOGIN</h1>
<form action="" method="post">
    <input type="email" name="email" placeholder="Informe seu email" id="">
    <input type="password" name="senha" placeholder="Informe a senha" id="">
    <button type="submit">Entrar</button>
</form>