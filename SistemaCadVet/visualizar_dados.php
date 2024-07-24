<!DOCTYPE html>
<html>
<head>
    <title>Registros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #378258;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>ANIMAIS CADASTRADOS</h1>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Raça</th>
                <th>Cor</th>
                <th>Dono</th>
                <th>Telefone</th>
            </tr>
            <?php
            // Conexão com o banco de dados (substitua pelas suas credenciais)
            $conn = new mysqli("localhost", "root", "root", "bdcadvet");
            
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }
            
            // Consulta para obter todas as tarefas
            $sql = "SELECT * FROM tbanimais";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // Saída de dados de cada linha
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nome"] . "</td>";
                    echo "<td>" . $row["raca"] . "</td>";
                    echo "<td>" . $row["cor"] . "</td>";
                    echo "<td>" . $row["dono"] . "</td>";
                    echo "<td>" . $row["telefone"] . "</td>";
                    echo "</tr>";
                }
                
            } else {
                echo "<tr><td colspan='6'>Nenhum dado encontrado</td></tr>";
            }
            
            $conn->close();
            ?>
        </table>
        <a href="index.php">Voltar</a>
        <a href="excluir.php">Excluir</a>
        <a href="alterar.php">Alterar</a>
    </div>
</body>
</html>