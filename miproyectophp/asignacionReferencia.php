<?php

    $texto = "Colombia";

    $variable1 = $texto;
    $variable2 = &$texto;

    echo $variable2;

    $texto = "Bogotá";
    
    echo $variable1;
    echo $variable2;