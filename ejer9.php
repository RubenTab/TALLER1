<?php
    $NomApren = $_POST["NomApren"];
    $Asignatura = $_POST["Asignatura"];
    $Nota1 = $_POST["Nota1"];
    $Nota2 = $_POST["Nota2"];
    $Nota3 = $_POST["Nota3"];

    $Notafin = ($Nota1*0.30)+($Nota2*0.30)+($Nota3*0.40);

    if($Notafin >= 4.0){
        echo "Sr(a) ".$NomApren." su nota es de ".$Notafin. " esta aprovado ";
    }else{
        echo "Sr(a) ".$NomApren." su nota es de ".$Notafin. " esta reprovado ";
    }

?>