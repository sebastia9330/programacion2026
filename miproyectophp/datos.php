<?php

    echo 'Metodo POST';
    echo '<br>';
    $nombre = $_POST['nombre'];
    $asignatura = $_POST['asignatura'];
    $frutas = $_POST['frutas'];

    echo $nombre.' - '.$asignatura.' - '.$frutas;

    echo '<br>';
    echo 'Metodo GET';
    echo '<br>';
    $nombre = $_GET['nombre'];
    $asignatura = $_GET['asignatura'];
    $frutas = $_GET['frutas'];


    echo $nombre.' - '.$asignatura.' - '.$frutas;


    var_dump($_POST['asignatura']);

    echo '<br>';

    foreach($_POST['asignatura'] as $asignatura){
        echo $asignatura.'<br>';
    }


    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';

    $frutaa=$_POST['frutas'];
    
    
    foreach($frutaa as $fruta){
        echo $fruta.'<br>';
    }