<?php

    $ventas = [
        ["cliente" => "Ana", "monto" => "150.00", "pais" => "CO"],
        ["cliente" => "Luis", "monto" => "90", "pais" => "CO"],
        ["cliente" => "Ana", "monto" => null, "pais" => "MX"],
        ["cliente" => "Maria", "monto" => "200.50", "pais" => ""],
        ["cliente" => "Luis", "monto" => "error", "pais" => "CO"],
        ["cliente" => "Carlos", "monto" => "120", "pais" => null],
    ];

    foreach($ventas as $dato => $valor){
        echo $valor['cliente']. ' ' .$valor['monto']. ' ' .$valor['pais'].'<br>';
    };

    $ventasLimpias = [];

    foreach($ventas as $venta){
        //1. validar monto
        if(!is_numeric($venta['monto'])){
            continue; //descartamos la venta
        };
        
        
        $montoLimpio = floatval($venta['monto']);
        

        //Limpiar pais
        $paisLimpio = $venta['pais'];
        if($paisLimpio === '' || $paisLimpio === null){
            $paisLimpio = 'DESCONOCIDO';
        }

        //ARMAR VENTA LIMPIA
        $ventasLimpias[] = [
            'cliente' => $venta['cliente'],
            'monto' => $montoLimpio,
            'pais' => $paisLimpio
        ];
    };

    foreach($ventasLimpias as $dato => $valor){
        echo $valor['cliente']. ' ' .$valor['monto']. ' ' .$valor['pais'].'<br>';
    };

    //total ingresos
    $totalIngresos = 0;

    foreach($ventasLimpias as $venta){
        $totalIngresos += $venta['monto'];
    }

    echo 'El ingreso total fue de $'.$totalIngresos.'<br>';

    //promedio Ingresos
    $cantidadVentas = count($ventasLimpias);
    $PromedioIngresos = $cantidadVentas > 0 ? $totalIngresos/$cantidadVentas :0;

    echo 'El promedio total de los ingresos fue de $'.$PromedioIngresos.'<br>';

    //Total ingresos por pais
    $ingresosPorPais = [];

    foreach($ventasLimpias as $ventas){
        $pais = $ventas['pais'];

        if(!isset($ingresosPorPais[$pais])){
            $ingresosPorPais[$pais] = 0;
        }

        $ingresosPorPais[$pais] += $ventas['monto'];
    }

    foreach($ingresosPorPais as $clave => $valor){
        echo 'El ingreso del pais: '.$clave.' Es de $'.$valor.'<br>';
    }

    //cliente que mas dinero gasto
    $gastoPorCliente = [];

    foreach($ventasLimpias as $venta){
        $cliente = $venta['cliente'];

        if(!isset($gastoPorCliente[$cliente])){
            $gastoPorCliente[$cliente] = 0;
        }

        $gastoPorCliente[$cliente] += $venta['monto'];
    }

    //buscar el mayor
    $clienteTop = null;
    $montoMax = 0;

    foreach($gastoPorCliente as $cliente => $monto){
        if($monto > $montoMax){
            $montoMax = $monto;
            $clienteTop = $cliente;
        }
    }

    echo 'El cliente con mayor ingreso fue '.$clienteTop.' con un ingreso de $'.$montoMax;
    

    