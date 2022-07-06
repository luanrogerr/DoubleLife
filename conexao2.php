<?php
    // Dados da Conexão
    $servername = "localhost";
    $username = "id18647165_adfgil";
    $password = "#ProjetoFinal123";
    $dbname = "id18647165_doublelifebd";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checando a Conexão
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>