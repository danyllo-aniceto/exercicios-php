<?php
    $a = 5;
    $b = 4;
    $c = 7;

    if($a > $b and $a > $c and $b > $c){
        echo"ordem decrescente: $a, $b, $c";
    }
    elseif($a > $b and $a > $c and $c > $b){
        echo"ordem decrescente: $a, $c, $b";
    }
    elseif($b > $a and $b > $c and $a > $c){
        echo"ordem decrescente: $b, $a, $c";
    }
    elseif($b > $a and $b > $c and $c > $a){
        echo"ordem decrescente: $b, $c, $a";
    }
    elseif($c > $a and $c > $b and $a > $b){
        echo"ordem decrescente: $c, $a, $b";
    }
    else{
        echo"ordem decrescente: $c, $b, $a";
    }
?>