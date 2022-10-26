<?php
    $ValCapital = $_POST["ValCapital"];

    if($ValCapital < 500){
        $intereses = $ValCapital * 0.2;
        $TotalCapital = $ValCapital + $intereses;

        echo "El total del valor de su invercion es de " .$ValCapital. ", sus intereses son por un valor de " .$intereses. ", Su Capital total es de " .$TotalCapital;
    }elseif($ValCapital >= 500 && $ValCapital < 1500){
        $intereses2 = $ValCapital * 0.45;
        $TotalCapital = $ValCapital + $intereses2;

        echo "El total del valor de su invercion es de " .$ValCapital. ", sus intereses son por un valor de " .$intereses2. ", Su Capital total es de " .$TotalCapital;

    }else{
        $intereses3 = $ValCapital * 0.7;
        $TotalCapital = $ValCapital + $intereses3;

        echo "El total del valor de su invercion es de " .$ValCapital. ", sus intereses son por un valor de " .$intereses3. ", Su Capital total es de " .$TotalCapital;
    }
?>