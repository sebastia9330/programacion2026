<?php
#declaracion antigua
$estudiantes = array("Sebastian", "Juan", "Samuel", "Dilza");
$estudiantes[1] = "Doris";

echo $estudiantes[1] ;

#version nueva
#array de topo escalar
$estudiantes1= ["Sebastian", "Juan", "Samuel", "Dilza", 9];

echo $estudiantes1[4];

#array tipo asociativo
$personal = ["nombre"=>"Sebastian",
            "apellido"=>"Ortiz",
            "edad"=>30];

$personal["edad"]=19;

echo $personal["apellido"];

#arrays multidimensionales
$personal2 = ["nombre"=>"Samuel",
            "apellido"=>"Carrero",
            "edad"=>10,
            "cursos"=>["php","python","html", "javascript"],
            "familiar"=>["nombre"=>"Sebastian","apellido"=>"Ortiz","edad"=>30]];

echo $personal2["familiar"]["nombre"];

$personal2["cursos"][2] = "css";

echo $personal2["cursos"][2];

$personal["pais"] = "colombia";

echo $personal["pais"];

echo count($estudiantes);
echo count($personal);
echo count($personal2);


