<?php
    $a[1][1] = "Juan";
    $a[2][1] = "Carlos";

    //a tiene 20 filas y 5 columnas

    //20 filas i
    for($i=1; $i <=20; $i++){
        //5 columnas o celdas
        for($j=2; $j<=5;$j++){
            $a[$i][$j] = rand(0, 120);
        }
    }

    //Sumar 3ra columna
    $suma = 0;
    for($i=1; $i <=20; $i++){
        $suma = $suma + $a[$i][3];
    }
    //Sumar la fila 5
    $suma = 0;
    for($j=1; $j <=5; $j++){
        $suma = $suma + $a[5][$j];
    }

    //sumar las 2 ultimas columnas
    $suma = 0;
    for($i=1; $i <=20; $i++){
        for($j=1; $j<=2;$j++){
            $suma = $suma +$a[$i][$j];
        }
    }
?>