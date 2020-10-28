<?php
    for($i = 1; $i <= 100;$i++){
        $nota[$i] = rand(1,1000);
    }

    $suma = 0;
    for($i = 1; $i <= 10;$i++){
        $suma = $suma + $nota[$i];
        echo "$i = ".$nota[$i]."<br>";
    }

    echo "Suma = ".$suma."<br>";
    $prom = $suma/10;
    echo "Promedio = ".$prom."<br>";

    $suma = 0;
    foreach($nota as $not){
        $suma = $suma + $not;
    }

    echo "Suma = ".$suma."<br>";
    $prom = $suma/100;
    echo "Promedio = ".$prom."<br>";


?>