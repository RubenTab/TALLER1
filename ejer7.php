<?php
    $NomAprendiz = $_POST ["NomAprendiz"];
    $NomAsignatura = $_POST ["NomAsignatura"];
    $CaliFinal = $_POST ["CaliFinal"];

    if($CaliFinal<7){
        echo "Señor(a) ".$NomAprendiz. " su calificacion en la asignatura de ".$NomAsignatura. " es de " .$CaliFinal." estado reprobado";
    }else{
        echo "Señor(a) ".$NomAprendiz. " su calificacion en la asignatura de ".$NomAsignatura. " es de " .$CaliFinal." estado Aprobado";
    }
?>