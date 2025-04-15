<?php
// Verifica se os cookies estão definidos
if (isset($_COOKIE['nome']) && isset($_COOKIE['email']) && isset($_COOKIE['senha'])) {
    // Redireciona para boas-vindas.php se os cookies existirem
    header("Location: boas-vindas.php");
    exit();
} else {
    // Redireciona para cadastro.php se os cookies não existirem
    header("Location: cadastro.php");
    exit();
}
?>