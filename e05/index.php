<?PHP
    /*
    Array con Clave
    nombrearray[
        clave1  => valor,
        clave2 => valor2,
        clave3 => valor3,
        ...
        ];
    */
    $miarray = [
        'nombre' => "Jose Luis",
        'apellido' => "Pimentel Zegarra",
    ];
    echo "Hola ". $miarray['nombre']." ".$miarray['apellido'];
    echo "<br>";
    echo "Hola {$miarray['nombre']} {$miarray['apellido']}";
    echo "<br>";

    $miarray['nombre'] = "Juan";
    $miarray['apellido'] = "Alcalá";
    $miarray['edad'] = 23.3;
    echo "Hola ". $miarray['nombre']." ".$miarray['apellido']." de ".$miarray['edad']." años de edad";
    echo "<br>";

     /*
    Array sin Clave
    array[valor, valor2, valor3, ...]
    */
    $miarray2 = ["Margarita","Ocampo",17];
    echo "Hola ". $miarray2[0]." ".$miarray2[1]." de ".$miarray2[2]." años de edad";
    echo "<br>";
    
    //reemplazar los valores del array $miarray2
    $miarray2[0] = "Roberto";
    $miarray2[1] = "MArtines";
    $miarray2[2] = 29;
    echo "Hola ". $miarray2[0]." ".$miarray2[1]." de ".$miarray2[2]." años de edad";
    echo "<br>";

    //Crear arrays sin clave
    $miarray3[] = "Lucho";
    $miarray3[] = "Prieto";
    $miarray3[] = 20;
    echo "Hola ". $miarray3[0]." ".$miarray3[1]." de ".$miarray3[2]." años de edad";
    echo "<br>";

    print_r($miarray3);
    echo "<br>";

    //3ra forma de crear un array
    $array = array(55, 62, 54, 95, 12, 47, 49, 2, 6);
    $cant_elementos = count($array);
    echo "Cantidad de elementos: ".$cant_elementos."<br>";
    for($i = 0;$i <= $cant_elementos-1;$i = $i +2){
        echo "{$array[$i]} <br>";
    }

    echo "---------------------------<br>";
    foreach ($array as $num) {
        echo "$num <br>";
    }

    $miarray = [
        'nombre' => "Jose Luis",
        'apellido' => "Pimentel Zegarra",
    ];

    foreach ($miarray as $clave => $valor) {
        echo "$clave = $valor <br>";
    }

?>