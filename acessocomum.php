<?php
//Verifica se o usuário logou.
if(!isset ($_SESSION['nome']) || !isset ($_SESSION['tipo']))
{
  unset($_SESSION['nome']);
  unset($_SESSION['tipo']);
  header('location:index.php');
  exit;
}
?>