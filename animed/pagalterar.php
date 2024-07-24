<html>
<head>
    <title>Animed</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <style>
            .alterar-container {
                max-width: 400px;
                margin: 0 auto;
                text-align: center;
                border-radius: 10px; /* Bordas arredondadas */
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
                padding: 20px;
                background-color: #f9f9f9; /* Cor de fundo */
            }

            input[type="text"] {
                width: 30%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-bottom: 15px;
            }

            input[type="submit"] {
                width: 20%;
                padding: 10px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            input[type="submit"]:hover {
                background-color: #0056b3
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

    <div class="alterar-container">
        <h3>Alterar Dados</h3>
        <form action="alterardadosnobanco.php" method="POST">
            Digite o horário:
            <input type="text" name="horario">
            
            <br><br>
            
            Digite a alteração desejada:
            <input type="text" name="horario1">
            
            <br><br>

            <input type="submit" name="enviar" value="Alterar">
        </form>
    </div>
</body>
</html>