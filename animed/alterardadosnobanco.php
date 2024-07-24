<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_STRING);
    $horario1 = filter_input(INPUT_POST, 'horario1', FILTER_SANITIZE_STRING);
   
    $conn = new mysqli("localhost", "root", "root", "bdanimed");

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $sql = "UPDATE tbpacientes SET horario='$horario1' WHERE horario='$horario'";

    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo "Dados Alterados";
        } else {
            echo "Nenhum dado encontrado para alteração";
        }
    } else {
        echo "Erro ao tentar alterar registro: " . $conn->error;
    }

    $conn->close();
    header("refresh:5;url=visualizarconsultas.php");
    exit; 
}
?>