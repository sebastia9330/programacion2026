<?php
    /* session_name('con');
    #session_id('php');
    session_start();


    #$_SESSION['contador'] = 1; */

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
        <!-- <?php
            echo 'Has recargado esta pagina '.$_SESSION['contador'].'veces';
        ?> -->
        <form action='login.php' method='POST'>
            <label>Usuario</label>
            <input type='text' name='usuario' pattern='[a-zA-Z]{3,10}' maxlength=10>
            <br>
            <label>Clave</label>
            <input type='password' name='clave' pattern='[a-zA-Z0-9$@.-]{4,30}' maxlength=30>
            <br><br>
            <button type='submit'>Login</button>
        </form>
    </body>
    </html>