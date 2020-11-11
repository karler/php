<?php
for ($i = 1; $i <= 40; $i++) {
    $notas[$i] = rand(0, 20);
    echo $notas[$i] . " - ";
}

//Calcula el mayor de las notas
$mayor = 0;
for ($i = 1; $i <= 40; $i++) {
    if ($notas[$i] > $mayor) {
        $mayor = $notas[$i];
    }
}
echo "<br>El mayor es: $mayor";

//Calcula el menor de las notas
$menor = 20;
for ($i = 1; $i <= 40; $i++) {
    if ($notas[$i] < $menor) {
        $menor = $notas[$i];
    }
}
echo "<br>El menor es: $menor";

//Calcula el promedio de las notas
$suma = 0;
for ($i = 1; $i <= 40; $i++) {
    $suma = $suma + $notas[$i];
}
$promedio = $suma / 40;
echo "<br>El promedio es: $promedio";

//Cuantos jalados hay
$jalados = 0;
for ($i = 1; $i <= 40; $i++) {
    if ($notas[$i] < 13) {
        $jalados++;
    }
}
echo "<br>Los jalados son: $jalados";

//Cuantos aprobados hay
$aprobados = 0;
for ($i = 1; $i <= 40; $i++) {
    if ($notas[$i] >= 13) {
        $aprobados++;
    }
}
echo "<br>Los aprobados son: $aprobados";

//Cuantos aprobados hay
$destacados = 0;
for ($i = 1; $i <= 40; $i++) {
    if ($notas[$i] >= 15 and $notas[$i] < 19) {
        $destacados++;
    }
}
echo "<br>Los destacados son: $destacados";
