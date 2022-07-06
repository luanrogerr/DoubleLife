<?php
    $text = "123";
    $text2 = "321";
    
    $hash = password_hash($text, PASSWORD_BCRYPT);
    
    echo "Gerei isso: " . $hash;
    
    $resultado = password_verify($text2, $hash);
    
    if($resultado){
        echo'<br><br>Senha Ok!';
    } else{
        echo '<br><br>Senha Errada!';
    }
?>