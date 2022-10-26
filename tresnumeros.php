<?php
    $Num1 = $_POST["Num1"];
    $Num2 = $_POST["Num2"];
    $Num3 = $_POST["Num3"];

    if($Num1>$Num2){
        if($Num1>$Num3){
            echo $Num1." es mayor que ".$Num2. " y que ".$Num3;
        }else {
            echo $Num3." es mayor  que ".$Num1. "y que ".$Num2;
        }
    }elseif($Num2>$Num3){
        echo $Num2. " es mayor que ".$Num1. " y que ".$Num3;
    }else{
        echo $Num3. " es mayor que ".$Num1. " y que ".$Num2;
    }

?>