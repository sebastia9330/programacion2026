<?php

    echo 'For each en php'.'<br>';


    $frutas = ['manzana', 'pera', 'uva', 'fresa', 'naranja'];

    $ropa=[
        'Camisetas'=>100,
        'Jeans'=>150,
        'Tennis'=>200,
        'Buzos'=>120,
        'Camisetas'=>80,
    ];

    foreach($frutas as $valor){
        echo $valor.'<br>';
    };


    foreach($frutas as $clave => $valor){
        echo $clave. ' - ' .$valor.'<br>';
    };


    foreach($ropa as $clave => $valor){
        echo 'la prenda de vestir llamada '.$clave. ' cuesta ' .$valor.' pesos'.'<br>';
    };


    $productos = [
        ['codigo' => 'AOOO1', 'descripcion' => 'Mouse'],
        ['codigo' => 'AOOO2', 'descripcion' => 'Teclado'],
        ['codigo' => 'AOOO3', 'descripcion' => 'Monitor'],
        ['codigo' => 'AOOO4', 'descripcion' => 'Impresora'],
    ];

    foreach($productos as $valor){
        echo $valor['codigo'].' - '.$valor['descripcion'].'<br>';
    };