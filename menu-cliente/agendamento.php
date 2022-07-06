<?php
  
    session_start();
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="shortcut icon" type="imagex/png" href="/imagens/logo.ico">
    <link rel="stylesheet" href="/estilos/tabela-pesquisa.css">
    
    <link rel="stylesheet" href="/estilos/header-footer.css">
    
</head>
<body>
 <?php
    include"menu-cliente.php";
    
    require "conexao.php";
    
    $sql = "SELECT * FROM medico";
    
    $result = $conn->query($sql);
    
    $row = $result->fetch_assoc();
    
    if($result->num_rows == 0){
 ?>
    <div class="divform">
        <!--<form method="post" action="agendar.php" id="form-servico">-->
            <label class="itens-form-servico">Pesquisar:</label><br>
             <input type="text" name="servico" value="" id="myInput" class="itens-form-servico" onkeyup="myFunction()"><br>
             <table id="myTable">
  <tr class="header">
    <th style="width:60%; margin-left: 50%; transform: translateX(-50%);">Especialidade</th>
  </tr>
  <?php
    $especialidade = $row['servico'];
	  while($row = $result->fetch_assoc()) {
		echo "<tr><td><button onclick='window.location = 'equipe-medica.php?especialidade'' class='itens-tabela' type='submit'>".$especialidade."</button></td></tr>";
		
	  }
	?>
	<tr>
	    <td><button onclick="window.location = 'equipe-medica.php'" class='itens-tabela' type='submit'>Cargiologia</button></td>
	</tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "block";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<?php
    } else {
    		echo "<h1>Nenhum resultado foi encontrado.</h1>";
    	}
?>
        <!--</form>-->
    </div>
    <div>
        <form method="post" action="/menu-cliente/php/agendar.php" id="form-dia" style="display: none;">
             <label class="itens-form-servico">Dia:</label><br>
             <input type="date" name="dia" required class="itens-form-servico"><br>
             <button id="btn-agendar-dia" name="dia" type="submit">Próximo</button>
             <button class="btn-agendar-servico" name="voltarDia" type="submit">Voltar</button>
        </form>
    </div>
    <div>
        <form method="post" action="/menu-cliente/php/agendar.php" id="form-hora" style="display: none;">
            <label class="itens-form-servico">Horário:</label><br>
            <input type="time" name="horario" required class="itens-form-servico"><br>
            <button id="btn-agendar-hora" name="hora" type="submit">Enviar</button>
            <button id="btn-agendar-servico" name="voltarHora" type="submit">Voltar</button>
        </form>
        
    </div>
</body>