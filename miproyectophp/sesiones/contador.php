<?php
    /* session_name('con');
    #session_id('php');
    session_start();

    if(isset($_SESSION['contador'])){
        $_SESSION['contador'] ++ ;
    }else{
        $_SESSION['contador'] = 1;
    } */
    

    session_name('login');
    session_start();
?>
<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carga de archivo</title>
    </head>
    <body>
        <!-- <h2>Id de la sesion</h2>
        <?php
            echo session_id();
        ?> -->

        <!-- <?php
            echo 'Has recargado esta pagina '.$_SESSION['contador'].'veces';
        ?> -->

        <!-- <br><br>
        <a href='index.php'>Inicio</a>
        <br> -->

        <?php
            echo 'Hola '.$_SESSION['Nombre'].' ';
        ?>

        <a href='cerrar.php'>Eliminar sesion</a>
    </body>
    </html>