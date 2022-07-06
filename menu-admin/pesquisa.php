<?php
    require "conexaoadmin.php";
    
    $sql = "SELECT * FROM usuario";
    
    //Executa o SQL
    $result = $conn->query($sql);
    
    // Cria uma matriz com o resultado da consulta
    $row = $result->fetch_assoc();
    
    $pesquisa = $_POST['pesquisa'];
    
        
        
?>