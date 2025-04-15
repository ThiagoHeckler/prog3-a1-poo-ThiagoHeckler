<!-- filepath: c:\xampp\htdocs\xampp\Formulario_login\dashboard.php -->
<?php

require_once 'classes/Sessao.php';

Sessao::iniciar();

// Verifica se o usuário está logado
if (!Sessao::get('email')) {
    header("Location: login.php");
    exit();
}

$nome = Sessao::get('nome');
$email = $_COOKIE['email'] ?? Sessao::get('email');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        Bem-vindo, <?php echo htmlspecialchars($nome); ?>!
    </header>
    <main>
        <h1>Área Restrita</h1>
        <p>Bem-vindo(a), <?php echo htmlspecialchars($nome); ?>!</p>
        <p>Seu e-mail: <?php echo htmlspecialchars($email); ?></p>
        <a href="logout.php" class="logout-button">Sair</a>
    </main>
    <footer>
        Desenvolvido por Thiago Emanuel Correia Heckler - UNOESC SMO - Ciência da Computação
    </footer>
</body>
</html>