<?php

    echo 'convertir un string en un array'.'<br>';

    $fecha1 = '2021/11/29';
    $fecha2 = '2026-02-16';
    $numeros = 'Uno Dos Tres Cuatro Cinco Seis Siete';

    $arrayFecha1 = explode('/', $fecha1);
    
    echo $arrayFecha1[0]. '<br>';
    echo $arrayFecha1[1]. '<br>';
    echo $arrayFecha1[2]. '<br>';


    $arrayFecha2 = explode('-', $fecha2);

    echo 'año = ' .$arrayFecha2[0]. '<br>';
    echo 'mes = ' .$arrayFecha2[1]. '<br>';
    echo 'día = ' .$arrayFecha2[2]. '<br>';

    $arrayNumeros = explode(' ', $numeros,-1);

    echo '1 = ' .$arrayNumeros[0]. '<br>';
    echo '2 = ' .$arrayNumeros[1]. '<br>';
    echo '3 = ' .$arrayNumeros[2]. '<br>';
    echo '4 = ' .$arrayNumeros[3]. '<br>';
    echo '5 = ' .$arrayNumeros[4]. '<br>';
    echo '6 = ' .$arrayNumeros[5]. '<br>';
    #echo '7 = ' .$arrayNumeros[6]. '<br>';
