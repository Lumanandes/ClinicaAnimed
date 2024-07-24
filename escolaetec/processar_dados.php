<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $senhacriptografada = password_hash($senha, PASSWORD_DEFAULT);

    // Conexão com o banco de dados 
    $conn = new mysqli("localhost", "root", "root", "etecalunos");
    
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO usuario (usuario,senha) VALUES ('$usuario','$senhacriptografada')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: pagwelcome.php"); // Redirecionar de volta para
        // a página principal
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
