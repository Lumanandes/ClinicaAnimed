<html>
    <head>
    <meta charset="UTF-8">
    </head>
<body>
    <a href="pagexcluir.php">Excluir Registro</a>
    <?php
            // Conexão com o banco de dados (substitua pelas suas credenciais)
            $conn = new mysqli("localhost", "root", "root", "etecalunos");
            
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }
            
            // Consulta para obter todas as tarefas
            $sql = "SELECT * FROM usuario";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // Saída de dados de cada linha
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . $row["codigo"] . "</li>";
                    echo "<li>" . $row["usuario"] . "</li>";
                    echo "<li>" . $row["senha"] . "</li>";
                    echo "***********************";
                }  
            } else {
                echo "Nenhum dado encontrado";
            }
            $conn->close();
    ?>
        <hr>
        <a href="pagwelcome.php">Home</a>
</body>
</html>