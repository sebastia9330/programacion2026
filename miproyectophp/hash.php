<?php

    $clave = 'Contraseña1234';

    echo md5($clave);
    echo '<br>';
    
    echo sha1($clave);
    echo '<br>';
    echo hash('md5',$clave);
    echo '<br>';
    foreach(hash_algos() as $algoritmos){
        echo $algoritmos.' - '.hash($algoritmos,$clave).'<br>';
    };

    echo password_hash($clave,PASSWORD_DEFAULT);
    echo '<br>';
    echo password_hash($clave,PASSWORD_BCRYPT,['cost'=>11]);

    $clave_procesada = password_hash($clave,PASSWORD_BCRYPT,['cost'=>11]);

    echo '<br>';

    if(password_verify($clave,$clave_procesada)){
        echo 'la contraseña coincide';
    }else{
        echo 'la contraseña no coincide';
    }