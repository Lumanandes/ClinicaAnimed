<html>
<head>
    <title>Animed</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilo para o contêiner do formulário */
        .cadastrar-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        /* Estilo para as etiquetas dos campos */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        /* Estilo para os campos de entrada */
        input[type="text"] {
            width: calc(100% - 20px); 
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-left: 0; 
        }

        /* Estilo para o botão de envio */
        button[type="submit"] {
            display: block;
            width: 15%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
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
    <div class="cadastrar-container">
    <form action="processar_dados.php" method="POST">
        Nome: <input type="text" name="nome" placeholder="Digite o nome do paciente" required>
        <br><br>
        E-mail: <input type="text" name="email" placeholder="Digite o e-mail do paciente" required>
        <br><br>
        Telefone: <input type="text" name="telefone" placeholder="Digite o telefone do paciente"required>
        <br><br>
        Horário: <input type="text" name="horario" placeholder="Digite o horário do paciente"required>
        <br><br>
        <button type="submit">Enviar</button>
</form>
</div>