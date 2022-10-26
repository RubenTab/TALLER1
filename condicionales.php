<?php
    // condicionales o difurcaciones 

    $n1 = 15;
    $n2 = 6;
    $n3 = 20;
    /* operadores de cpmparacion 
        == comparar igualdad
        < menor que 
        > mayor que 
        <= menor o igual que 
        >= mayor o igual que 
        
    ****operadores de anidacion: para varias 
        preguntas al tiempo**** 
        "&&" significa Y 
        "or" significa ó
    */

    if ($n1==$n2){
        echo "los valores son iguales";
    }elseif($n1>$n2){
        echo "el valor ".$n1." es mayor que el valor ".$n2;   
    }else{
        echo "el valor ".$n1." es menor que el valor ".$n2;
    }

?>