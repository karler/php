<?php
   //Calcular factorial utilzando funciones
    function factorial($num){
        $fac = 1;
        for($i = 1;$i <= $num;$i = $i + 1){
            $fac = $fac * $i;
        }
        return $fac;
    }

    $a = 5;
    echo "<br> Factorial de $a es: ".factorial($a);
?>
