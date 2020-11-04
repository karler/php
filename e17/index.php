<?php
    //Reemplace los caracteres "do" en la cadena con "dito":
    echo strtr("Hola mundo","do","dito");

    //La función substr () devuelve una parte de una cadena.
    //substr(string,start,length)
    echo substr("Hola mundo, Soy José",5,5);

    //La función strstr () busca la primera aparición de una cadena dentro de otra cadena.
    //strstr(string,search,before_search)
    echo strstr("Hola mundo!","mundo");

    //La función strrpos () encuentra la posición de la última aparición de una cadena dentro de otra cadena.
    //strrpos(string,find,start)
    echo strrpos("I love php, I love php too!","php");

    //La función strpos () encuentra la posición de la primera aparición de una cadena dentro de otra cadena.
    //strpos(string,find,start)
    echo strpos("I love php, I love php too!","php");
?>