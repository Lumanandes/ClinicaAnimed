<html>
    <head>
    </head>
<body>
<h1>Animed - Aqui você é muito feliz!</h1>
    <nav>
        <a href ="index.php">Home</a>
        <a href ="cadastrarconsultas.php">Cadastrar consultas</a>
        <a href ="visualizarconsultas.php">Visualizar consultas</a> 
    </nav>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_STRING);

    // Conexão com o banco de dados  do phpmyadmin: local/usuario/senha/banco de dados
    $conn = new mysqli("localhost", "root", "root", "bdanimed");
    
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    //inserir os dados na tabela usuarios do nosso banco de dados
    $sql = "INSERT INTO tbpacientes (nome, email, telefone, horario) VALUES ('$nome','$email','$telefone','$horario')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: cadastrarconsultas.php"); // Redirecionar de volta para a página principal
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
        $conn->close();
}
?>
</body>
</html>
