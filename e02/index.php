<?php

//Si tienes entre 0 y 17 años mostrar "eres menor de edad"
//Si tienes entre 18 y 65 años motrar "Eres ciudadano activo"
//Si tienes más de 65 años mostrar "Eres ciudadano NO Activo"
$edad = -5;
if ($edad>=0 and $edad<=17) {
    echo "Eres menor de edad";
}elseif ($edad>0 and $edad<=65){ // (edad < 0 or edad > 17) and (edad <= 65)
                                // (-5 < 0 or -5 > 17) and -5 <=65
    echo "Eres ciudadano activo";
}elseif($edad>0){// (edad > 65) and (edad > 0)
    echo "Eres ciudadano NO activo";
}else{
    echo "Ingresa una edad mayor a cero";
}
?>