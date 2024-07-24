<html>
<head>
    <title>CadVet</title>
    <meta charset="UTF-8">
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
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $conn = new mysqli("localhost", "root", "root", "bdcadvet");    
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }
    $sql = "DELETE FROM tbanimais WHERE nome='$nome'";
    if ($conn->query($sql) === TRUE) {
        // Verificar se algum registro foi excluído ou não
        if ($conn->affected_rows > 0) {
            echo "Animal excluído com sucesso";
        } else {
            echo "Nenhum nome encontrado para exclusão";
        }
    } else {
        echo "Erro ao tentar excluir animal: " . $conn->error;
    }  
    $conn->close();
    header("refresh:3;url=visualizar_dados.php");
}
?>

<body>
    <div class="header">
            <h1>SISTEMA DE CADASTROS - CADVET</h1>
            <br>
            <a href="index.php">Home</a>
            <a href="visualizar_dados.php">Visualizar Dados</a>
    </div>

    <div class= "form-animais">
        <h3>Excluir Animal</h3>
        <form action="" method="POST">
            <label>Digite o nome do animal:</label>
            <input type="text" name="nome"><br><br>
            <button type="submit" name="enviar">Excluir</button>
        </form>
    </div>
</body>
</html>