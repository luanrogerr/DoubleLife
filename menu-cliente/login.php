<?php
session_start();

if (isset($_POST['senha'])){
require 'conexao.php';
// Dados do Formulário
$campoemail = $_POST["email"];
$camposenha = $_POST["senha"];
    
//$senha = password_hash($camposenha, PASSWORD_BCRYPT);

//Faz a conexão com o BD.


//Cria o SQL (consulte tudo na tabela usuarios com o email digitado no form)
$sql = "SELECT * FROM usuario where email='$campoemail'";

//include '/log.php';

$result = $conn->query($sql);

// Cria uma matriz com o resultado da consulta
 $row = $result->fetch_assoc();
 
 
	//Se a consulta tiver resultados
    	if ($result->num_rows > 0) {
    		
    			if(password_verify($camposenha, $row["senha"]) === TRUE){
    			    $_SESSION['id'] = $row["id"];
    				$_SESSION['nome'] = $row["nome"];
    				$_SESSION['email'] = $row["email"];
    				$_SESSION['senha'] = $row["senha"];
    				$_SESSION['tipo'] = $row["tipo"];
    
                    if(isset($_SESSION["email"]) && isset($_SESSION["senha"])){
                        if(isset($_SESSION["tipo"])){
                            if($_SESSION["tipo"]=="a"){
                                header("Location: /menu-admin/indexadmin.php");
                            } elseif($_SESSION["tipo"]=="c"){
                                header("Location: /index.php");
                            } else{
                                header("Location: /menu-med/indexmedico.php");
                            }
                       }
                    }
    				exit;
    			}else{
    				header( "refresh: 0.00001;url=cadastro-login.php" );
    				echo '<script>alert("Login Incorreto!")</script>'; 
    				exit;  
    			}
    	//Se a consulta não tiver resultados  			
    	} else {
    		header( "refresh: 0.00001;url=cadastro-login.php" );
    		echo '<script>alert("Sem Resultados!")</script>'; 
    		exit;
    	}
    //Se o usuário não usou o formulário
    } else {
        header( "refresh: 0.00001;url=cadastro-login.php" );
    	echo '<script>alert("Sem Dados!")</script>'; 
    	exit;
    }
    //Fecha a conexão.
    $conn->close();


?>