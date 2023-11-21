<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessos</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        nav {
            background-color: #eee;
            padding: 10px;
            text-align: center;
        }

        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

    </style>
</head>
<body>

    <header>
        <h1>Usuários com acesso ao sistema:</h1>
    </header>

    <nav>
        <a href="dashboard.php">HOME</a>
        <a href="contato.php">CONTATO</a>
        <a href="aboutus.php">SOBRE NÓS</a>
    </nav>

    <?php

session_start();
include_once("config.php");
$sql = "SELECT * FROM usuarios";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<form action='editar.php' method='post'>";
        echo "<input type='text' name='nome' value ='" . $row['nome'] . "'>";
        echo "<input type='text' name='id' value ='" . $row['id'] . "'>";
        echo "Usuário: " . $row["usuario"] . "<br>";
        echo "<input type='text' name='email' value ='" . $row['email'] . "'>";
        echo "Data de Nascimento: " . $row["data_nasc"] . "<br>";
        echo "CPF: " . $row["cpf"] . "<br>";
        echo "<button type='submit'> Editar </button>";
        echo "<a href='delete.php?id=".$row['id']."'>Excluir</a>";
        echo "<hr>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}




$con->close();
?>
<form action="../Controller/UsuarioController.php" method="post">

<label for="nome">Nome:</label>
<input type="text" id="nome" name="nome" value="<?php echo $result['nome']?>"><br>

<label for="email">Email:</label>
<input type="email" id="email" name="email" value="<?php echo $result['email']?>"><br>


<input type="submit" value="salvar">
</form>
</body>
</body>
</html>