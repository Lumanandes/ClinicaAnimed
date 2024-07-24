<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "root";
	$dbname = "etecalunos";
	
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$pesquisar = $_POST['pesquisar'];
	$result_usuarios = "SELECT * FROM usuario WHERE usuario LIKE '%$pesquisar%' LIMIT 5";
	$resultado_usuarios= mysqli_query($conn, $result_usuarios);
	
	if ($resultado_usuarios) 
	{
		while ($rows_usuarios = mysqli_fetch_assoc($resultado_usuarios)) 
		{
			echo "Nome do Usuário: " . $rows_usuarios['usuario'] . "<br>";
		}
	} else 
	{
		echo "Erro na consulta SQL: " . mysqli_error($conn);
	}
	if(mysqli_num_rows($resultado_usuarios)==0)
	{
		echo "Usuário não encontrado.";
	}
?>


