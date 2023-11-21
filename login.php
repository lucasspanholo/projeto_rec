<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <form action="loginController.php" method="POST">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <button type="submit">Entrar</button>
    </form>
</div>
<button>
    <a href="register.php"> Cadastre-se
</button>

</body>
</html>
