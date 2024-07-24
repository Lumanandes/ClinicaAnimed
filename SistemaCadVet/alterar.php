<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <title>Sistema CADVET</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Estilos do Cabeçalho */
        .header {
            background-color: #378258;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
        }

        .header a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .header a:hover {
            text-decoration: underline;
        }

        /* Estilos do Formulário de Animais */
        .form-animais {
            margin: 20px auto;
            width: 80%;
            max-width: 400px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-animais h1 {
            color: #333;
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .form-animais input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-animais button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 1em;
            cursor: pointer;
        }

        .form-animais button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $nome1 = filter_input(INPUT_POST, 'nome1', FILTER_SANITIZE_STRING);
   
    $conn = new mysqli("localhost", "root", "root", "bdcadvet");

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $sql = "UPDATE tbanimais SET nome='$nome1' WHERE nome='$nome'";

    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo "Dados Alterados";
        } else {
            echo "Nenhum dado encontrado para alteração";
        }
    } else {
        echo "Erro ao tentar alterar registro: " . $conn->error;
    }

    $conn->close();
    header("refresh:5;url=visualizar_dados.php");
    exit; 
}
?>

<body>
    <div class="header">
            <h1>SISTEMA DE CADASTROS - CADVET</h1>
            <br>
            <nav>
                <a href="index.php">Home</a>
                <a href="visualizar_dados.php">Visualizar Dados</a>
            </nav>
    </div>

    <div class= "form-animais">
        <h3>Alterar Dados</h3>
        <form action="" method="POST">
            Digite o nome:
            <input type="text" name="nome">
            
            <br><br>
            
            Digite a alteração desejada:
            <input type="text" name="nome1">
            
            <br><br>

            <button type="submit" name="enviar">Alterar</button>
        </form>
    </div>
</body>
</html>