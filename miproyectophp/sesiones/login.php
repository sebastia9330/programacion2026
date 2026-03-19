<?php

    id(!preg_match("/^[a-zA-Z]{3,10}$/",$_POST['usuario'])){
        echo 'El usuario no coincide con el formato solicitado';
        exit();
    }

    id(!preg_match("/^[a-zA-Z0-9$@.-]{4,30}$/",$_POST['clave'])){
        echo 'La clave no coincide con el formato solicitado';
        exit();
    }

    if($_POST['usuario'] == 'Sebastian' && $_POST['clave'] == '123456'){
        session_name('login');
        session_start();

        $_SESSION['Nombre'] = 'Sebastian';
        $_SESSION['Apellido'] = 'Ortiz';
        $_SESSION['Pais'] = 'Colombia';

        

        if(headers_sent()){
            echo "<script> window.location.href='contador.php'; </script>"; 
        }else{
            header('Location: contador.php');
        }

        #echo 'Sesion iniciada';
    }else{
        echo 'Datos incorrectos';
    }