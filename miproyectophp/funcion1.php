<?php

    echo 'Comunicar una funcion con otra desde archivos diferentes <br>';


    function promedioAlumno($nota1,$nota2,$nota3){
        $promedio = ($nota1+$nota2+$nota3)/3;
        return $promedio;
    }