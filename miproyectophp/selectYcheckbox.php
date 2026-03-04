<?php

    echo 'select de varias opciones y checkbox en php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>formularios</h1>

    <form action='datos.php' method='POST'><!-- el action dice a donde vamos a enviar los datos de este formulario  y despues colocamos el metodo ya sea get o post-->
        <br>
        <label for='asignatura'>Asignatura</label>
        <select id='asignatura' name='asignatura[]' multiple>
            <option value='Ingles'>Ingles</option>
            <option value='Matematicas'>Matematicas</option>
            <option value='Ciencias'>Ciencias</option>
            <option value='Lenguaje'>Lenguaje</option>
        </select>
        <br><br>
        <label for='opcion-1'>
            <input type='checkbox' value='Manzana' id='opcion-1' name='frutas[]'>
            Manzana
        </lable>
        <label for='opcion-2'>
            <input type='checkbox' value='Fresa' id='opcion-2' name='frutas[]'>
            Fresa
        </lable>
        <label for='opcion-3'>
            <input type='checkbox' value='Mora' id='opcion-3' name='frutas[]'>
            Mora
        </lable>
        <br><br><br>
        <button type='submit'>Enviar</button>
    </form>
</body>
</html>
