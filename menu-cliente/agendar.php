<?php
	require "conexao.php";

	$servico = $_POST['especialidade'];

	$sql = "INSERT INTO consultas (servico) VALUES ('$servico')";

	if ($conn->query('$sql') === TRUE) {
		header('Location: menu-cliente/equipe-medica.php');
	} else{
		echo "$conn->error";
	}
	$conn->close();
?>