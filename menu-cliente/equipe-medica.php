<?php
	require "conexao.php";

	$sql = "SELECT servico FROM consultas";
	
	$result = $conn->query($sql);

	$row = $result->fetch_assoc();
	
	if($result->num_rows > 0){
		echo "$result"; //Continuar daqui...
	} else{
    	header( "refresh: 0.00001;url=agendamento.php" );
    	echo '<script>alert("Sem Resultados!")</script>'; 
    	exit;
    }
?>