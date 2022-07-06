<?php
// Dados da Conexão
$servername = "localhost";
$username = "id18647165_adfgil";
$password = "#ProjetoFinal123";
$dbname = "id18647165_doublelifebd";

// Leitura do Formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

// Criando a Conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checando a Conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Criando o SQL - inserindo na tabela contato os campos em seguida
$sql = "INSERT INTO contato (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

if ($conn->query($sql) === TRUE) {
  //echo "Cadastro feito com sucesso!";
  header("Location:/index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
// Inserindo e exibindo erros.
  /*if (empty($_POST["nome"])) {
    $nomeErr->style="display: block;";
  } elseif(empty($_POST["email"])) {
        $emailErr->style="display: block;";
  } elseif(empty($_POST["assunto"])){
        $assuntoErr->style="display: block;";
  } elseif(empty($_POST["mensagem"])){
        $mensagemErr->style="display: block;";
  } else{
    if ($conn->query($sql) === TRUE) {
        $mensagemConfirm->style="display: block;";
    }
  }*/

  /*function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  */
?>