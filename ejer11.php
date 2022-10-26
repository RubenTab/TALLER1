<?php
    $PreActual = $_POST["PreActual"];
    $PreFinal = $PreActual * 0.15;
    $PreVenta = $PreActual + $PreFinal;

    echo "Valor de producto para la venta es de " .$PreVenta;

?>