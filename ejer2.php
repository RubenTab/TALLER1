<?php
    $NomAlum = $_POST['NomAlum'];
    $Asigna = $_POST['Asigna'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $Promedio = ($nota1 + $nota2 + $nota3) / 3;

    echo $NomAlum. " su calificaion en ". $Asigna. " es de ". $Promedio;
    

?>