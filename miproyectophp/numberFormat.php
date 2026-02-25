<?php

    echo 'formato numericos'.'<br>';


    $cantidad1 = 12732.777;
    $cantidad2 = 1993.09;

    //number_format(cantidad,decimales,sep_decimales,sep_millar);
    
    $cantidad1 = number_format($cantidad1,4,',','.');

    echo $cantidad1;