<?php
 $NomEquipo = $_POST['NomEquipo'];
 $ParGanado = $_POST['ParGanado'];
 $ParEmpata = $_POST['ParEmpata'];
 $ParPerdi = $_POST['ParPerdi'];
 $PuntGanados = $ParGanado * 3;
 $PuntEmpata = $ParEmpata * 1;
 $PuntPerdi = $ParPerdi * 0;
 $PunTotal = $PuntGanados + $PuntEmpata + $PuntPerdi;

 echo $NomEquipo. " Gano ". $ParGanado. " Empato ". $ParEmpata. " Perdio ". $ParPerdi. " Puntos Totales ". $PunTotal;

?>