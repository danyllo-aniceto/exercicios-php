<?php
    $i = 1;
    do{
        if($i <= 100){
            echo"<br> $i - ".$i*2;
        }else{
            echo"<br> $i - $i";
        }
        $i++;
    }while($i <= 120)

?>