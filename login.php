<!-- filepath: c:\xampp\htdocs\xampp\Formulario_login\login.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        Bem-vindo ao site de login
    </header>
    <main>
        <h1>Login</h1>
        <form action="processa_login.php" method="POST">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <button type="submit">Entrar</button>
        </form>
    </main>
   <footer>
        Desenvolvido por Thiago Emanuel Correia Heckler - UNOESC SMO - Ciência da Computação
    </footer>
</body>
</html>