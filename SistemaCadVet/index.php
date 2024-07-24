<!DOCTYPE html>
<html>
<head>
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
<body>
    <div class="header">
            <h1>SISTEMA DE CADASTROS - CADVET</h1>
            <br>
            <a href="index.php">Home</a>
            <a href="visualizar_dados.php">Visualizar Dados</a>
    </div>

    <div class= "form-animais">
        <form action="processar_dados.php" method="post">
            <h1>CADASTRO DE ANIMAIS</h1>
            <input type="text" name="nome" placeholder="Digite o nome" required>
            <input type="text" name="raca" placeholder="Digite o raça" required>
            <input type="text" name="cor" placeholder="Digite a cor" required>
            <input type="text" name="dono" placeholder="Digite o nome do dono" required>
            <input type="text" name="telefone" placeholder="Digite o telefone" required>
            <button type="submit">Enviar dados</button>
        </form>
    </div>
</body>
</html>


