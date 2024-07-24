<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $raca = filter_input(INPUT_POST, 'raca', FILTER_SANITIZE_STRING);
    $cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
    $dono = filter_input(INPUT_POST, 'dono', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    
    // Conexão com o banco de dados 
    $conn = new mysqli("localhost", "root", "", "bdcadvet");
    
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO tbanimais (nome, raca, cor, dono, telefone) 
    VALUES ('$nome', '$raca', '$cor', '$dono', '$telefone')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirecionar de volta para a página principal
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>