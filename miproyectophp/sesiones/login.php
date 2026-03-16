<?php

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