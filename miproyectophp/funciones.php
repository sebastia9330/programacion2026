<?php

    echo 'Funciones en php <br>';

    function saludo(){
        echo 'Hola mi nombre es: Sebastian <br>';
    }


    saludo();
    saludo();
    saludo();


    function saludar(){
        return 'Hola ¿Cual es tu nombre? <br>';
    }


    $saludar = saludar();

    echo $saludar;
    echo saludar();


    function nombre($nombre){
        return 'Hola mi nombre es '.$nombre. '<br>';
    }

    echo nombre('Sebastian');

    $usuario = 'Samuel';
    echo nombre($usuario);
    echo nombre($nombre = 'Felipe');

    function promedioAlumno($nota1,$nota2,$nota3){
        $promedio = ($nota1+$nota2+$nota3)/3;
        return $promedio;
    }

    

    echo 'El promedio es: '.promedioAlumno(7,6,6);
    echo '<br>';
    echo 'El promedio es: '.promedioAlumno(6,5,5);
    echo '<br>';
    echo 'El promedio es: '.promedioAlumno(5,4,4);
    echo '<br>';
    echo 'El promedio es: '.promedioAlumno(4,3,3);
    echo '<br>';
    echo 'El promedio es: '.promedioAlumno(3,2,2);
    echo '<br>';
    echo 'El promedio es: '.promedioAlumno(2,1,1);