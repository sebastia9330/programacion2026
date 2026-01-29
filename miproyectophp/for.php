<?php

    echo 'Ciclo For'.'<br>';

    for($i = 1; $i <= 20; $i++){
        echo $i. '<br>';
    }


    for($i = 20; $i >= 1; $i--){
        echo $i. '<br>';
    }

    $tabla = 12;

    for($i = 1; $i <= 12; $i++){
        echo $tabla. " X " .$i. " = ".$tabla*$i.'<br>';
    }

    $tabla2 = 7;

    for($i = 12; $i >= 1; $i--){
        echo $tabla2. " X " .$i. " = ".$tabla2*$i.'<br>';
    }