<?php
session_start();

//Verifica o acesso.
require 'acessocomum.php';

//Dados do formulário
$campoid = $_POST["id"];
$camponome = $_POST["nome"];
$campoemail = $_POST["email"];
$campoacesso = $_POST["tipo"];

//Faz a conexão com o BD.
require 'conexao.php';

//Sql que altera um registro da tabela usuários
$sql = "UPDATE usuario SET nome='" . $camponome . "', email='" . $campoemail . "', tipo='" . $campoacesso . "' WHERE id=" . $campoid;

//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) {
  echo "Registro atualizado.";
  
  include 'log.php';
  
} else {
  echo "Erro: " . $conn->error;
}
    header('Location: /menu-admin/controlarusuarios.php?pag=1'); //Redireciona para o form  

//Fecha a conexão.
  $conn->close();
  

?> 