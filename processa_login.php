<?php

require_once 'classes/Sessao.php';

// Recebe os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Verifica se os cookies estão definidos
if (isset($_COOKIE['email']) && isset($_COOKIE['senha'])) {
    if ($_COOKIE['email'] === $email && password_verify($senha, $_COOKIE['senha'])) {
        // Inicia a sessão
        Sessao::iniciar();
        Sessao::set('nome', $_COOKIE['nome']);
        Sessao::set('email', $_COOKIE['email']);

        // Redireciona para a área restrita
        header("Location: dashboard.php");
        exit();
    }
}

// Se as credenciais forem inválidas
header("Location: erro.php");
?>