<?php
//Llenar un array de 5x5 de numeros aleatoreos
//Sumar los números de la 3ra fila
//Sumar los números de la 2da columna
//Sumar todos los números del array

//filas
for ($i = 1; $i <= 5; $i++) {
    //columnas
    for ($j = 1; $j <= 5; $j++) {
        $num[$i][$j] = rand(10, 99);
        echo $num[$i][$j] . " - ";
    }
    echo "<br>";
}
echo "El valor de la fila 3 y columna 2 es:" . $num[3][2] . "<br>";

//Sumar los valores de la 3ra fila
$i = 3;
$suma = 0;
for ($j = 1; $j <= 5; $j++) {
    $suma = $suma + $num[$i][$j];
}
echo "La Suma es: $suma<br>";

//Sumar los valores de la 2da columna
$j = 2;
$suma = 0;
for ($i = 1; $i <= 5; $i++) {
    $suma = $suma + $num[$i][$j];
}
echo "La Suma es: $suma<br>";

//Sumar todos los valores
//filas
$suma = 0;
for ($i = 1; $i <= 5; $i++) {
    //columnas
    for ($j = 1; $j <= 5; $j++) {
        $suma = $suma + $num[$i][$j];
    }
}
echo "La suma total es: $suma<br>";
