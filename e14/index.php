<?php
    //Tabla de multiplicar del 1 al 12
    for($i = 1;$i <= 12;$i = $i + 1){
        for ($j = 1;$j <= 12; $j++){
            $p = $i * $j;
            echo "$i x $j = $p<br>";
        }
    }
?>

<?php
    //Calcular factorial
    $num = 5;
    $fac = 1;
    for($i = 1;$i <= $num;$i = $i + 1){
        $fac = $fac * $i;
    }
    echo "<br>$num! = $fac";
?>

<?php
    //Sumar los números impares del 1 al 100

    $suma = 0;
    for($i = 1;$i <= 100;$i = $i + 1){
        if($i % 2 != 0){
            $suma = $suma + $i;
        }
    }
    echo "<br>Suma = $suma";
?>

<?php
    //Guardar en un array 20 valores aleatoreos y luegos mostrar esos valores
    for($i = 1;$i <= 20;$i++){
        $a[] = rand(20,30);
    }
    //mostrando los 20 valores
    for($i = 0;$i <= 19;$i++){
        echo "<br>a[$i] = ".$a[$i];
    }
?>


