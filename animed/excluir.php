<html>
<head>
    <title>Animed</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sistema de Cadastros de Consultas - Clínica Animed</h1>
    <nav>
        <a href ="index.php">Home</a>
        <a href ="cadastrarconsultas.php">Cadastrar consultas</a>
        <a href ="visualizarconsultas.php">Visualizar consultas</a> 
    </nav>

        <h3>Excluir Cliente</h3>
        <form action="excluir_dados.php" method="POST">
            <label>Digite o nome do cliente:</label>
            <input type="text" name="usuario"><br><br>
            <input type="submit" name="enviar" value="Excluir">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);


            $conn = new mysqli("localhost", "root", "root", "bdanimed");
            
            if ($conn->connect_error) {
                die("Erro de conexão: " . $conn->connect_error);
            }

            $sql = "DELETE FROM tbpacientes WHERE nome='$nome'";

            if ($conn->query($sql) === TRUE) {
                // Verificar se algum registro foi excluído ou não
                if ($conn->affected_rows > 0) {
                    echo "Paciente excluído";
                } else {
                    echo "Nenhum registro encontrado para exclusão";
                }
            } else {
                echo "Erro ao tentar excluir registro: " . $conn->error;
            }
        
            $conn->close();
            header("refresh:5;url=z.php");
        }
        ?>
    </body>
</html>