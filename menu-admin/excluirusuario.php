<?php
    $dom = new DOMDocument('1.0', 'iso-8859-1');
    
    $dom->validateOnParse = true;
    if($_SESSION['tipo'] == "a"){
        
        require "conexaoadmin.php";
        
        $id = $row
        
        $sql = "DELETE FROM usuario WHERE ";
        
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        
        
    }
?>