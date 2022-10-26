<?php
    $Subtotal = $_POST["Subtotal"];

    if($Subtotal >= 20000){
        $TotalPagar = $Subtotal - ($Subtotal * .2);

        echo "su total a pagar con el descuento es de " .$TotalPagar;

    }else{
        echo "su total a pagar es de " .$TotalPagar;
    }
?>