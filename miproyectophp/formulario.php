<?php

    echo 'formularios en php';

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

    <form action='datos.php' method='GET'><!-- el action dice a donde vamos a enviar los datos de este formulario  y despues colocamos el metodo ya sea get o post-->
        <div>
            <label for='nombre'>Nombre</label>
            <input type='text' id='nombre' name='nombre'>
        </div>
        <br>
        <label for='asignatura'>Asignatura</label>
        <select id='asignatura' name='asignatura'>
            <option value='Ingles'>Ingles</option>
            <option value='Matematicas'>Matematicas</option>
            <option value='Ciencias'>Ciencias</option>
            <option value='Lenguaje'>Lenguaje</option>
        </select>
        <br><br>
        <label for='opcion-1'>
            <input type='checkbox' value='Manzana' id='opcion-1' name='frutas'>
            Manzana
        </lable>
        <br><br><br>
        <button type='submit'>Enviar</button>
    </form>
</body>
</html>
