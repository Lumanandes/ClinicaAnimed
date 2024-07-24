<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $senhacriptografada = password_hash($senha, PASSWORD_DEFAULT);

    $conn = new mysqli("localhost", "root", "", "etecalunos");
    
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $sql = "DELETE FROM usuario WHERE usuario='$usuario'";

    if ($conn->query($sql) === TRUE) {
        // Verificar se algum registro foi excluído ou não
        if ($conn->affected_rows > 0) {
            echo "Cliente excluído";
        } else {
            echo "Nenhum registro encontrado para exclusão";
        }
    } else {
        echo "Erro ao tentar excluir registro: " . $conn->error;
    }
  
    $conn->close();
    header("refresh:5;url=visualizar_dados.php");
}
?>