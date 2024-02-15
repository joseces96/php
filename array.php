<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <tile>Array</title>
</head>
<body>
<?php
    $dia[0] = "lunes";
    $dia[1] = "martes";
    $dia[2] = "miercoles";
    $dia[3] = "jueves";
    $dia[4] = "viernes";
    $dia[5] = "sabado";
    $dia[6] = "domingo";
    $hoy = date("N") - 1;
    $mes = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
    //mostrar el viernes
    print("Hoy es: ".$dia[$hoy]);

    print("<h4>Los dias son</h4>");
    for($x = 0 ; $x < count($dia) ; $x++){
        if($x == $hoy){
            print("<button>".$dia[$x]."</button><br>");
        }else{
            print($dia[$x]."<br> ");
        }
    }

    //imprimir febrero
    print("<h4>Los meses son</h4>");
    for($x = 0 ; $x < count($mes) ; $x++){
        print($mes[$x]."<br>");
    }
    print("<br>Este mes: ".$mes[1]);
?>

