<?php
    $volantes = $_POST["volantes"];
    $posters = $_POST["posters"];
    $tarjetas = $_POST["tarjetas"];
    $ValorVolan = $volantes*2000;
    $Valpost = $posters*5000;
    $Valtarje = $tarjetas*500;
    $ValTotal = $ValorVolan + $Valpost + $Valtarje;

    echo "Valor de los volantes ".$ValorVolan." $. <br/> ".
         "Valor de los posters ".$Valpost." $. <br/> ".
         "Valor de las tarjetas ".$Valtarje." $. <br/> ".
         "Total a pagar ".$ValTotal;

?>