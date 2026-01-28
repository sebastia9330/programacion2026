<?php

    $camisas = 6;
    $valorCamisa = 25000;

    $total = $camisas * $valorCamisa;

    
    $total = ($camisa >= 3) ? $total-($total * 0.20) : $total-($total * 0.10);

    echo "El total a pagar es de $ ".$total;



