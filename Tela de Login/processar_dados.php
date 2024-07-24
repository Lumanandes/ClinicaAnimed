<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
    $senha =filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    // Conexão com o banco de dados lá no phpmyadmin
    $conn = new mysqli("localhost", "root", "", "joelaguiar");
    
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: bemvindo.php"); // Redirecionar de volta para a página principal
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    } 
    $conn->close();
}
?>
