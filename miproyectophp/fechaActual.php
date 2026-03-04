<?php

    date_default_timezone_set('America/Bogota');

    function fechaEspañolLarga(){
        $fechaDia = date('d');
        $fechaMes = date('m');
        $fechaYear = date('Y');

        $diaSemana = [
            'Monday' => 'Lunes',
            'Tuesday' => 'Martes',
            'Wednesday' => 'Miercoles',
            'Thursday' => 'Jueves',
            'Friday' => 'Viernes',
            'Saturday' => 'Sabado',
            'Sunday' => 'Domingo'
        ];

        $mesesYear = [
            '01' => 'Enero',
            '02' => 'Febrero',
            '03' => 'Marzo',
            '04' => 'Abril',
            '05' => 'Mayo',
            '06' => 'Junio',
            '07' => 'Julio',
            '08' => 'Agosto',
            '09' => 'Septiembre',
            '10' => 'Octubre',
            '11' => 'Noviembre',
            '12' => 'Diciembre'
        ];

        $fechaFinal = $diaSemana[date('l')].' '.$fechaDia.' de '.$mesesYear[$fechaMes].' de '.$fechaYear;

        return $fechaFinal;
    }


    echo fechaEspañolLarga();

    echo '<br>';

    function fechaEspanolCorta($fecha=''){

        if($fecha==''){
            $fecha = date('d-m-Y');
        }else{
            $fecha = date('d-m-Y',strtotime($fecha));
        }

        $fecha = explode('-',$fecha);

        $fechaDia = $fecha[0];
        $fechaMes = $fecha[1];
        $fechaYear = $fecha[2];

        

        $mesesYear = [
            '01' => 'Enero',
            '02' => 'Febrero',
            '03' => 'Marzo',
            '04' => 'Abril',
            '05' => 'Mayo',
            '06' => 'Junio',
            '07' => 'Julio',
            '08' => 'Agosto',
            '09' => 'Septiembre',
            '10' => 'Octubre',
            '11' => 'Noviembre',
            '12' => 'Diciembre'
        ];

        $fechaFinal = $fechaDia.' de '.$mesesYear[$fechaMes].' de '.$fechaYear;

        return $fechaFinal;
    }

    echo fechaEspanolCorta('09/09/1993');
