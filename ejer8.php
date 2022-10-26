<?php
    $Edad = $_POST['Edad'];
    $Sexo = $_POST['Sexo'];


    if($Sexo == "Hombre" or $Sexo == "M"){
        if($Edad >= 64 ){
            echo "Usted es un hombre de ".$Edad. " años, ya tiene la edad para jubilarce";
                }else{
                    echo "Usted es un hombre de ".$Edad. " años, no tiene la edad para jubilarce";
                }

    }else{
        if($Edad >= 53 ){
            echo "Usted es una mujer de ".$Edad. " años, ya tiene la edad para jubilarce";
                }else{
                     echo "Usted es un mujer de ".$Edad. " años, no tiene la edad para jubilarce";
                }

    }

?>