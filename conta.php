<?php
session_start();

//Verifica o acesso.
//require 'acessocomum.php';

//Faz a conexão com o BD.
require 'conexao2.php';

//Cria o SQL (consulte tudo da tabela usuarios)
$sql = "SELECT * FROM usuario WHERE id =" .  $_SESSION["id"];

//Executa o SQL
$result = $conn->query($sql);

	//Se a consulta tiver resultados
	 if ($result->num_rows > 0) {

// Cria uma matriz com o resultado da consulta
 $row = $result->fetch_assoc();
?>
<html>
<head>
    <link rel="stylesheet" href="/estilos/style.css">
    <link rel="stylesheet" href="/estilos/header-footer.css">
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            text-align: center;
        }
        #container-form{
            position: absolute;
            width: 300px;
            text-align: center;
            padding: 5px;
            padding-top: 20px;
            color: black;
            font-size: 20px;
            margin-top: 10%;
            margin-left: 41%;
            border: 1px solid black;
        }
        .form-conta{
            width: 250px;
            height: 30px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div id="container-form">
        <i class="fa-solid fa-person"></i>
        <form method="post" action="usuarioeditarcodigocomum.php">
            <label class="form-conta">Nome:</label><br><br>
            <input class="form-conta" type="text" value="<?php echo $row["nome"]; ?>" name="nome"><br><br>
            <label class="form-conta">Email:</label><br><br>
            <input class="form-conta" type="email" value="<?php echo $row["email"]; ?>" name="email"><br><br>
            <label class="form-conta">CPF:</label><br><br>
            <input class="form-conta" type="text" value="<?php echo $row["cpf"]; ?>" name="cpf"><br><br>
            <input type="submit" class="form-conta" value="Salvar" name="btn_enviar">
        </form>
    </div>
</body>
</html>
<?php
	//Se a consulta não tiver resultados  			
	} else {
		echo "<h1>Nenhum resultado foi encontrado.</h1>";
	}

	//Fecha a conexão.	
	$conn->close();
	


?> 