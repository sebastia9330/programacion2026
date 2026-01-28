<?php

    $valor1 = 7;
    $valor2 = 5;

    echo "Operador and";
    var_dump($valor1 == 7 and 6>$valor2);
    var_dump($valor1 == 7 && 6>$valor2);


    echo "Operador or";
    var_dump($valor1 == 8 or 5>$valor2);
    var_dump($valor1 == 8 || 5>$valor2);
    var_dump($valor1 == 8 or 5>$valor2 || $valor2>10);

    echo "Operador de negacion";
    var_dump(!($valor1 == 7));

    echo "Almacenar un valor de un operador logico";
    $resultado = $valor1 == $valor2;
    var_dump($resultado);