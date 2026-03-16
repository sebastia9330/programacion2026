<?php
    setcookie('Idioma', 'es', time()+60*60*24*365, '/', 'localhost', false, false);
    #Parametrso de la cookie: nombre, valor, fecha de expiracion, directorio donde esta disponible, protocolo de seguridad, si sera leida solo por http 

?>
<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carga de archivo</title>
    </head>
    <body>
        <h1>Cookies en php</h1>
        <h1>valor de una cookie</h1>
        <h1><?php
            echo $_COOKIE['Idioma'];
        ?></h1>
    </body>
    </html>