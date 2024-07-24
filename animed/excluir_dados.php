<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_STRING);


    $conn = new mysqli("localhost", "root", "root", "bdanimed");
    
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $sql = "DELETE FROM tbpacientes WHERE horario='$horario'";
    if ($conn->query($sql) === TRUE) {
        // Verificar se algum registro foi excluído ou não
        if ($conn->affected_rows > 0) {
            echo "Consulta excluída com sucesso";
        } else {
            echo "Nenhum horário agendado encontrado para exclusão";
        }
    } else {
        echo "Erro ao tentar excluir consulta: " . $conn->error;
    }
  
    $conn->close();
    header("refresh:3;url=visualizarconsultas.php");
}
?>