<?php
    //Trim elimina espacioa delante y atraz del texto
    $text = "    Hola   ";
    echo ".".trim($text).".<br>";
    echo ".".rtrim($text).".<br>";
    echo ".".ltrim($text).".<br>";
?>

<?php
    //Convierte a mayúsculas la primera letra de cada palabra
    echo ucwords("<br>hello world");
    //Convierte el primer carácter de "Hola" a minúsculas
    echo lcfirst("<br>hello world!");
    //Convierta todos los caracteres a mayúsculas:
    echo strtoupper("<br>Hello WORLD!");
    //Convierta todos los caracteres a minúsculas:
    echo strtolower("<br>Hello WORLD.");

    //$nombre = "juan carlos";
    //$apellidos = "santos valderrama";

    //Crear una función que retorne:
    
    //Mostrar: SANTOS VALDERRAMA, Juan Carlos


    //Reemplace los caracteres "do" en la cadena con "dito":
    echo strtr("<br>Hola mundo  ","do  ","dito");

    //La función substr () devuelve una parte de una cadena.
    //substr(string,start,length)
    echo "<br>";
    echo substr("Hola mundo, Soy José",5,5);

    //La función strstr () busca la primera aparición de una cadena dentro de otra cadena.
    //strstr(string,search,before_search)
    echo "<br>";
    echo strstr("Hola, mundo!",",");

    //La función strpos () encuentra la posición de la primera aparición de una cadena dentro de otra cadena.
    //strpos(string,find,start)
    echo "<br>";
    echo strpos("I love php, I love php too!",",");

    //Devuelve la longitud de la cadana
    //strlen ( string $string )
    echo "<br>Tamaño de la cadena: ";
    echo strlen("Hola Mundo");







    $nombrecompleto = "SANTOS VALDERRAMA, Juan Carlos";

    $nombre = develvenombre($nombrecompleto);
    $apellidos = develveapellidos($nombrecompleto);
?> 