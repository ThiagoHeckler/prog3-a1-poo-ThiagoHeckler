<?php

require_once 'classes/Sessao.php';

Sessao::iniciar();
Sessao::destruir();

// Apaga os cookies
setcookie('nome', '', time() - 3600, "/");
setcookie('email', '', time() - 3600, "/");
setcookie('senha', '', time() - 3600, "/");

// Redireciona para a página de login
header("Location: login.php");
exit();
?>