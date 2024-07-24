<html>
<head>
    <title>Animed</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

    <style>
        /* Estilo para o corpo da página */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        /* Estilo para a lista de consultas */
        ul {
            list-style-type: none;
            padding: 0;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        /* Estilo para os links de ação */
        a {
            display: inline-block;
            margin-right: 10px;
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: none;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
</head>
<body>
    <h1>Sistema de Cadastros de Consultas - Clínica Animed</h1>
    <nav>
        <a href ="index.php">Home</a>
        <a href ="cadastrarconsultas.php">Cadastrar consultas</a>
        <a href ="visualizarconsultas.php">Visualizar consultas</a> 
        <a href ="pagexcluir.php">Excluir consulta</a>
        <a href ="pagalterar.php">Alterar horário</a>
    </nav>

    <?php
    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "root", "bdanimed");

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Consulta para obter todas as tarefas
    $sql = "SELECT * FROM tbpacientes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Saída de dados de cada linha
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li><strong>Código:</strong> " . $row["codigo"] . "</li>";
            echo "<li><strong>Nome:</strong> " . $row["nome"] . "</li>";
            echo "<li><strong>Email:</strong> " . $row["email"] . "</li>";
            echo "<li><strong>Telefone:</strong> " . $row["telefone"] . "</li>";
            echo "<li><strong>Horário:</strong> " . $row["horario"] . "</li>";
            echo "<hr>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum dado encontrado";
    }
    $conn->close();
    ?>
</body>
</html>