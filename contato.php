<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>

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

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
        }

        .contact-info {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .contact-info div {
            flex: 1;
            text-align: center;
            padding: 10px;
            background-color: #eee;
            border-radius: 5px;
        }

        .contact-info div:hover {
            background-color: #ddd;
        }

        .contact-info a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <header>
        <h1>Contato</h1>
    </header>

    <nav>
        <a href="../dashboard.php">HOME</a>
        <a href="../contato.php">CONTATO</a>
        <a href="../aboutus.php">SOBRE NÓS</a>
    </nav>

    <section>
        <h2>Entre em Contato Conosco</h2>
        <div class="contact-info">
            <div>
                <p>Telefone</p>
                <a href="tel:+55123456789">(12) 3456-7890</a>
            </div>
            <div>
                <p>Email</p>
                <a href="mailto:contato@empresa.com">contato@empresa.com</a>
            </div>
        </div>

    </section>

</body>
</html>
