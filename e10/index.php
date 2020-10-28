<?php
    //Mostrar números desde el 100 hasta el 200 de 5 en 5
    $valor = 100;
    while ($valor <= 200){
        echo "$valor, ";
        $valor = $valor + 5;
    }
?>

<?php
    //Sumar los 100 primeros números
    echo "<br><br>";
    $suma = 0;
    $valor = 1;
    while ($valor <= 200 ){
        $suma = $suma + $valor;
        $valor = $valor + 1;
    }
    echo "Suma: $suma";
?>

<?php
    //Hallar cuantos múltiplos de 3 existen entre 200 y 300
    echo "<br><br>";
    $contador = 0;
    $num1 = 1;
    $num2 = 20;
    while ($num1 <= $num2){
        if($num1 % 3 == 0){
            $contador++;
        }
        $num1++;
    }
    echo "Hay $contador multiplos de 3 entre $num1 y $num2";
?>

<?php
    //Ingresar 2 números y mostrar la media de todos los valores entre esos números
    echo "<br><br>";
    $num1 = 30;
    $num2 = 50;
    $suma = 0;
    $c = 0;
    while ($num1 <=50){
        $suma = $suma + $num1;
        $c++;
        $num1++;
    }
    $promedio = $suma/$c;
    echo "Promedio entre $num1 y $num2 es: $promedio"
?>

<?php
    //Generar 10 numeros aleatoreos y calcular su promedio
    echo "<br><br>";
    $num1 = 1;
    $num2 = 10;
    $numa = 0;
    $suma = 0;
    $c = 0;
    while ($num1 <=$num2){
        $numa = rand(1,100);
        echo "$numa, ";
        $suma = $suma + $numa;
        $c++;
        $num1++;
    }
    $promedio = $suma/$c;
    echo "<br>Promedio de 10 numeros aleatoreos es: $promedio<br>";
?>