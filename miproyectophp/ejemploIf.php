<?php

$edad=20;

if($edad >= 18){
    echo "Eres mayor de edad";
}


$total = 120;

if($total>100){
    $total=$total-($total*0.20);
}

echo "El total a pagar es de $".$total;