<?php
    $HorasLavor = $_POST['HorasLavor'];
    $ValorHora = $_POST['ValorHora'];
    $TotalPagar = $HorasLavor * $ValorHora;

    echo "El Total a pagar es de ". $TotalPagar;

?>