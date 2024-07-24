<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $usuario1 = filter_input(INPUT_POST, 'usuario1', FILTER_SANITIZE_STRING);

    $conn = new mysqli("localhost", "root", "", "etecalunos");

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $sql = "UPDATE usuario SET usuario='$usuario1' WHERE usuario='$usuario'";

    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo "Cliente Alterado";
        } else {
            echo "Nenhum registro encontrado para alteração";
        }
    } else {
        echo "Erro ao tentar alterar registro: " . $conn->error;
    }

    $conn->close();
    header("refresh:5;url=pagwelcome.php");
    exit; 
}
?>