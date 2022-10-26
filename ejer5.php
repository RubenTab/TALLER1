<?php
    $Edad1 = $_POST ["Edad1"];
    $Edad2 = $_POST ["Edad2"];

    if($Edad1>$Edad2){
        $Diferencia = $Edad1-$Edad2;
        echo "Hermano 1 tiene ".$Edad1. " es mayor que hermano 2 que tiene ".$Edad2. " la diferencia es de " .$Diferencia. " años"; 
    }else {
        $Diferencia = $Edad2-$Edad1;
        echo "Hermano 2 tiene ".$Edad2. " es mayor que hermano 1 que tiene ".$Edad1. " la diferencia es de " .$Diferencia. " años";
    }
?>