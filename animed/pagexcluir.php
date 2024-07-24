<html>
<head>
    <title>Animed</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <style>
        .excluir-container {
            max-width: 400px;
            margin: 0 auto;
            text-align: center;
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
            padding: 20px;
            background-color: #f9f9f9; /* Cor de fundo */
        }
        
            .excluir-container h3 {
            margin-top: 0;
            color: #333;
        }

        .excluir-container form {
            margin-top: 20px;
        }

        .excluir-container label {
            display: block;
            font-weight: bold;
            color: #555;
        }

        .excluir-container input[type="text"] {
            width: calc(100% - 22px); /* Ajuste para compensar a largura do botão */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .excluir-container button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s;
        }

        .excluir-container button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Sistema de Cadastros de Consultas - Clínica Animed</h1>
    <nav>
        <a href ="index.php">Home</a>
        <a href ="cadastrarconsultas.php">Cadastrar consultas</a>
        <a href ="visualizarconsultas.php">Visualizar consultas</a> 
    </nav>

    <div class="excluir-container">
        <h3>Excluir Consulta</h3>
        <form action="excluir_dados.php" method="POST">
            <label>Digite o horário do paciente:</label>
            <input type="text" name="horario"><br><br>
            <button type="submit" name="enviar">Excluir</button>
        </form>
    </div>

</body>
</html>