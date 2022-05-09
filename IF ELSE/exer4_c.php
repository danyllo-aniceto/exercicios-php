<?php
    $a = 5;
    $b = 4;
    $c = 7;

    if($a > $b and $a > $c and $b > $c){
        echo"ordem crescente: $c, $b, $a";
    }
    elseif($a > $b and $a > $c and $c > $b){
        echo"ordem crescente: $b, $c, $a";
    }
    elseif($b > $a and $b > $c and $a > $c){
        echo"ordem crescente: $c, $a, $b";
    }
    elseif($b > $a and $b > $c and $c > $a){
        echo"ordem crescente: $a, $c, $b";
    }
    elseif($c > $a and $c > $b and $a > $b){
        echo"ordem crescente: $b, $a, $c";
    }
    else{
        echo"ordem crescente: $a, $b, $c";
    }
?>