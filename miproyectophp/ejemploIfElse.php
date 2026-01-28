<?php

    $cantidad = 7;

    if($cantidad < 5){
        $resultado = $cantidad * 800;
    }else{
        $resultado = $cantidad * 700;
    };

    if($cantidad < 5):
        $resultado1 = $cantidad * 900;
    else:
        $resultado1 = $cantidad * 600;
    endif;
    
    echo "el precio total de la compra es: ".$resultado;
    echo "el precio total de la compra es: ".$resultado1;

    $nota1 = 8.0;
    $nota2 = 8.5;
    $nota3 = 9.0;

    $promedio = ($nota1 + $nota2 + $nota3)/ 3;

    if($promedio >= 7.0){
        echo "El estudiante aprobo el curso su nota fue: ".$promedio;
    }else{
        echo "El estudiando reprobo el curso su nota fue: ".$promedio;
    }


    if($promedio >= 5.0):
        echo "El estudiante aprobo el curso su nota fue: ".$promedio;
    else:
        echo "El estudiando reprobo el curso su nota fue: ".$promedio;
    endif;