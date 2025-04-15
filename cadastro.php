<!-- filepath: c:\xampp\htdocs\xampp\Formulario_login\cadastro.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        Bem-vindo ao site de cadastro
    </header>
    <main>
        <h1>Cadastro de Usuário</h1>
        <form action="processa_cadastro.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <button type="submit">Cadastrar</button>
        </form>
    </main>
    <footer>
        Desenvolvido por Thiago Emanuel Correia Heckler - UNOESC SMO - Ciência da Computação
    </footer>
</body>
</html>