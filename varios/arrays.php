<?php
    /*
    Array con Clave
    array[
        clave1  => valor,
        clave2 => valor2,
        clave3 => valor3,
        ...
        ]
    */
    $miarray = [
        'nombre' => "Jose Luis",
        'apellido' => "Pimentel Zegarra",
    ];
    echo "Hola ". $miarray['nombre']." ".$miarray['apellido'];
    echo "<br>";
    echo "Hola {$miarray['nombre']} {$miarray['apellido']}";
    echo "<br>";

    $miarray['nombre'] = "Jose Luis";
    $miarray['apellido'] = "Pimentel Zegarra";
    echo "Hola ". $miarray['nombre']." ".$miarray['apellido'];
    echo "<br>";

     /*
    Array sin Clave
    array[valor, valor2, valor3, ...]
    */

    $miarray = ["Jose Luis","Pimentel Zegarra"];
    echo "Hola ". $miarray[0]." ".$miarray[1];
    echo "<br>";

    $miarray[] = "Jose Luis";
    $miarray[] = "Pimentel Zegarra";
    echo "Hola ". $miarray[0]." ".$miarray[1];
    echo "<br>";
    print_r($miarray);
    echo "<br>";
?>
<?php

$array = array(55, 62, 54, 95, 12, 47, 49, 2, 6);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo "Bien: " . $array[$i] . "\n";
    echo "Bien: $array[$i] \n";
    echo "Bien: {$array[$i]}\n";
}
echo "<br>";
foreach ($array as $num) {
    echo "¿Le gusta el $num?\n";
}
?>