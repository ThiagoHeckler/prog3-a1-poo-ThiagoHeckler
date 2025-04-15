<?php

require_once 'classes/Usuario.php';

// Recebe os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Cria um novo objeto Usuario
$usuario = new Usuario($nome, $email, $senha);

// Salva os dados do usuário em cookies
setcookie('nome', $usuario->getNome(), time() + (86400 * 30), "/"); // 30 dias
setcookie('email', $usuario->getEmail(), time() + (86400 * 30), "/");
setcookie('senha', $usuario->getSenha(), time() + (86400 * 30), "/");

// Redireciona para a página de login
header("Location: login.php");
exit();
?>