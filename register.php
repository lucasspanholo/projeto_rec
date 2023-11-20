<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastro</title>
</head>
<body>

<div class="container">
    <h2>Cadastro</h2>
    <form action="registerController.php" method="POST" onsubmit="return validarForm();">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>
            
        <label for="Date">Data Nascimento:</label>
        <input type="text" id="data_nasc" name="data_nasc" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email"name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>

        <button type="submit">Cadastrar</button>
    </form>
</div>
<script>
function validarForm() {
    
    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var dataNascRegex = /^\d{2}\/\d{2}\/\d{4}$/;
    var cpfRegex = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;

    var email = document.getElementById('email').value;
    var dataNasc = document.getElementById('data_nasc').value;
    var cpf = document.getElementById('cpf').value;

    if (!emailRegex.test(email)) {
        alert('E-mail inválido.');
        return false;
    }

    if (dataNasc !== '' && !dataNascRegex.test(dataNasc)) {
        alert('Data de Nascimento inválida. Use o formato DD/MM/AAAA.');
    return false;
    }


    if (!cpfRegex.test(cpf)) {
        alert('CPF inválido. Use o formato 123.456.789-00.');
        return false;
    }

}
</script>
</body>
</html>


