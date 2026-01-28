<?php

    echo 'ciclo do While'.'<br>';

    $contador = 1;

    do{
        echo $contador.'<br>';
        $contador++;
    }while($contador<=20);


    $contador2 = 20;

    do{
        echo $contador2.'<br>';
        $contador2--;
    }while($contador2>=1);


    $multiplicador = 1;
    $tabla = 6;

    do{
        echo $tabla. " X " .$multiplicador. " = ".$tabla*$multiplicador.'<br>';
        $multiplicador++;
    }while($multiplicador<=12);