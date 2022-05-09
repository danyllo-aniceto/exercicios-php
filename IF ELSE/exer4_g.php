<?php
    $a = 3;
    $b = 8;
    $c = 9;
    $d = 2;
    $soma = $a + $c;
    $mult = $b * $d;
    
    if($soma > $mult){
        echo"$a + $c = $soma é maior que $b * $d = $mult";
    }
    elseif($soma < $mult){
        echo"$a + $c = $soma é menor que $b * $d = $mult";
    }
    else{
        echo"$a + $c = $soma é igual que $b * $d = $mult";
    }
?>