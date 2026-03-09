<?php

    echo 'Verificar el estado de una variable en php';
    echo '<br>';

    $numero = NULL;

    if(is_null($numero)){
        echo 'La variable es nula';
    }else{
        echo 'La variable no es nula';
    }


    $numero2 = '9';

    unset($numero2); #anula una variable

    if(is_null($numero2)){
        echo 'La variable es nula';
    }else{
        echo 'La variable no es nula';
    }

    echo '<br>';

    $numero3 = '0';

    if(empty($numero3)){
        echo 'La variable esta vacia';
    }else{
        echo 'La variable no esta vacia';
    }

    echo '<br>';

    $numero4 = '0';

    unset($numero4);

    if(isset($numero4)){
        echo 'La variable esta definida';
    }else{
        echo 'La variable no esta definida';
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="datos.php" method='POST'>
            <input type='text' name='numero'>
            <button type='submit'>Enviar</button>
        </form>
        
    </body>
    </html>