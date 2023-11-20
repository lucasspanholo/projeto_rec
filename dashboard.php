<?php
session_start();

if (!isset($_SESSION['email'])) {
    echo  "<script>alert('Erro ao logar, tente novamente.');</script>";
    header("Location: login.php");
    exit();
}

require('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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

        .info-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .info-box {
            background-color: #6280d3;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            max-width: 300px;
            text-align: center;
        }

        button {
            background-color: #15E8CA;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
        

    </style>
</head>

<body>
    <header>
        <h1>Bem vindo ao ELTRO</h1>
    </header>

    <nav>
        <a href="dashboard.php">HOME</a>
        <a href="contato.php">CONTATO</a>
        <a href="aboutus.php">SOBRE NÓS</a>
    </nav>


    <h3>Aqui estão as informações do seu edifício:</h3>

    <div class="info-container">
        <div class="info-box">
            <h2>Economia de Energia</h2>
            <p>Informações sobre a quantidade de energia economizada.</p>
            <button>
                <a href="economia.jpg" target="_blank">
                    Abrir
                </a>
            </button>
        </div>

        <div class="info-box">
            <h2>Gasto Energético</h2>
            <p>Informações sobre a taxa do gasto energético em reais.</p>
            <button>
                <a href="consumo-energetico.jpg" target="_blank">
                    Abrir
                </a>
            </button>
        </div>

        <div class="info-box">
            <h2>Consumo de Energia</h2>
            <p>Informações sobre o consumo de energia no último ano.</p>
            <button>
                <a href="consumo.jpg" target="_blank">
                    Abrir
                </a>
            </button>
        </div>
    </div>

    <form action="logout.php" method="post">
    <button type="submit">Sair</button>
</form>
</body>
</html>


<!-- fonte graficos www.ccee.org.br -->