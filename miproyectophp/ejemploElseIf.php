<?php

    $totalComputadoras = 3;

    $total = $totalComputadoras * 700;

    echo $total;

    if($totalComputadoras < 5){
        $total = $total-($total * 0.10);
    }elseif($totalComputadoras >= 5 && $totalComputadoras < 10){
        $total = $total-($total * 0.20);
    }elseif($totalComputadoras >= 10){
        $total = $total-($total * 0.40);
    }


    echo "El valor total de la compra es: ".$total;