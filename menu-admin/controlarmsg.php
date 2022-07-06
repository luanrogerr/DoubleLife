<?php
session_start();

//Cria variáveis com a sessão.
$logado = $_SESSION['nome'];

//Verifica o acesso.
if($_SESSION['tipo']=="a"){

//Faz a conexão com o BD.
require 'conexaoadmin.php';

//Lê a página que será exibida
$id = $_GET["pag"];

//Quantidade de registros a serem exibidos
$total = 5;

//Indica o registro limite para paginação
if($id!=1){
    $id = $id -1;
    $id = $id * $total + 1;
}

$id--;

//Cria o SQL com limites de página ordenado por id
$sql = "SELECT * FROM contato ORDER BY id LIMIT $id, $total";

//Conta a quantidade total de registros
$sql1 = "SELECT count(*) as contagem FROM contato";

//Executa o SQL
$result = $conn->query($sql);
$result1 = $conn->query($sql1);

//Recupera o resultado da contagem
$row1 = $result1->fetch_assoc();
$contagem = $row1["contagem"];

if($contagem%$total==0){
    $contagem=$contagem/$total;
}else{
    $contagem=$contagem/$total + 1;    
}

	//Se a consulta tiver resultados
	 if ($result->num_rows > 0) {
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
     <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <title>Controlar Mensagens</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/estilos/tabela.css">
    <link rel="stylesheet" href="/estilos/styleadmin.css">
    <link rel="stylesheet" href="/estilos/login.css">
    <style>
        .disclaimer {
            display:none;
        }
    </style>
    </head>
    <body>
        <div class = "header">
        <!--Header-->
   <?php
        include "menu-admin.php";
   ?>
        </div>
      
        <div class="conteudo" style = "padding-top: 120px;">
                    <div class = "Pesquisa"  style = "float: right">
                        <input id = "pesquisar" onkeyup="myFunction()" placeholder="Buscar Usuários..." name="pesquisa" type="text">
                    </div>
        <table id = "Tabela-Contato">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Assunto</th>
                <th>Mensagem</th>
                
            	<?php
            	  while($row = $result->fetch_assoc()) {
            		echo "<tr><td>" .
            		$row["id"] . "</td><td>" .
            		$row["nome"] . "</td><td>" .
            		$row["email"] . "</td><td>" .
            		$row["assunto"] . "</td><td>" .
            		$row["mensagem"];
            	
            	  }
            	?>
        				
        </table>
        </div>
           <div class="pagination">
                <?php for($i=1; $i <= $contagem; $i++) {
                        echo "<a href='controlarmsg.php?pag=$i'>$i</a>";
                } 
            	?>   
            </div>  
            </div> 
            <?php
                include "footer-admin.php";
            ?>
    </body>
    <script>
    
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("pesquisar");
      filter = input.value.toUpperCase();
      table = document.getElementById("Tabela-Contato");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
    
</script>

</html>

<?php
	//Se a consulta não tiver resultados  			
	} else {
		echo "<h1>Nenhum resultado foi encontrado.</h1>";
	}
	
//Fecha a conexão.	
	$conn->close();
	
//Se o usuário não usou o formulário
} else {
    header('Location: index.php'); //Redireciona para o form
    exit; // Interrompe o Script
}
?> 