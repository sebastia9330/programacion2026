<?php

    var_dump(1=='1');
    var_dump(2=='1');

    $valor1 = 2;
    var_dump($valor1 == '1');

    $valor2 = 1;
    var_dump($valor2 === '1');

    $valor3 = 7;
    var_dump($valor3 != '7');

    $valor4 = 7;
    var_dump($valor4 <> '7');

    $valor5 = 'Hola';
    var_dump($valor5 == 'hola');

    $valor6 = 10;
    var_dump($valor6 !== '10');

    $valor6 = 9;
    var_dump($valor6 < 10);

    $valor6 = 11;
    var_dump($valor6 > 10);

    $valor6 = 10;
    var_dump($valor6 <= 10);

    $valor6 = 10;
    var_dump($valor6 >= 10);