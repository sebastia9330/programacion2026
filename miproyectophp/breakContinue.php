<?php

    echo 'Break y Continue en php'.'<br>';

    $c = 1;

    while($c <= 20){
        echo $c.'<br>';
        if($c == 10){
            break;
        }
        $c ++;
    }

    $pc = ['SO','SSD','GPU','RAM','CPU'];

    foreach($pc as $componente){
        echo $componente.'<br>';
        if($componente == 'GPU'){
            break;
        }
    }


    $frutas = ['fresa','pera','manzana','lulo','mora'];

    foreach($pc as $componente){
        if($componente == 'manzana'){
            continue;
        }
        echo $componente.'<br>';
    }


    for($i=1;$i<=10;$i++){
        if($i == 5){
            continue;
        }
        echo $i.'<br>';
    }

    $j = 1;

    while($j <= 10){
        if($j == 5){
            $j++;
            continue;
        }
        echo $j.'<br>';
        $j ++;
    }