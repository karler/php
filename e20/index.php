<?php
// Teniendo 100 numeros aleatorios en un array entre 1 y 150, sacar el promedio de los que son mayores a 50
    for ($i = 1; $i <= 100; $i++){
        $num[$i] = rand(1,150);
    }

    $suma = 0;
    $contador = 0;
    foreach($num as $element){
        if($element > 50){
            $suma = $suma + $element;
            $contador++;
        }
    }

    $promedio = $suma / $contador;
    echo "El promedio de los elementos mayores a 50 es: $promedio <br>";
    echo "son $contador elementos";
?>