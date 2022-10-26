<?php
    
    $VelCons = $_POST['VelCons'];
    $Time = $_POST['Time'];
    $Dist = $VelCons * $Time;

    echo $Dist. " Esta es la distacia recorrida ";

?>