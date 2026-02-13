<?php

    echo 'Funciones para formatear strings <br>';

    $cadenaTexto = 'Hola mundo';

    $minuscula = strtolower($cadenaTexto);
    $mayusculas = strtoupper($cadenaTexto);

    echo ($minuscula.'<br>');
    echo ($mayusculas.'<br>');
    echo strtolower($cadenaTexto.'<br>');

    $primera = ucfirst($minuscula);
    echo ($primera.'<br>');

    $primeraLetra = ucwords($minuscula);
    echo ($primeraLetra.'<br>');


    $nombre = 'Sebastian Felipe Carrero Ortiz';
    echo $nombre;
    $longitud = strlen($nombre);
    echo '<br>'.$nombre.' tiene '.$longitud.' caracteres';


    $cantidadPalabras = str_word_count($nombre);
    echo '<br>'.$nombre.' tiene '.$cantidadPalabras.' palabras';