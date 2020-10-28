<?php
define("pi",3.1415628);

$numero_dia = date('N');
/*
la función nativa date() de PHP, permite dar formato a la fecha local
N, retorna un número de 1 a 7, que representa el número de día de la
semana, siendo 1 Lunes y 7 domingo.
Esta función, será vista con detenimiento, más adelante.
Para mayor información, visitar la documentación oficial en
http://www.php.net/manual/es/function.date.php
*/
$nombre_dia = '';
switch ($numero_dia) {
    case 1:
        $nombre_dia = "Lunes";
        break;
    case 2:
        $nombre_dia = "Martes";
        break;
    case 3:
        $nombre_dia = "Miércoles";
        break;
    case 4:
        $nombre_dia = "Jueves";
        break;
    case 5:
        $nombre_dia = "Viernes";
        break;
    case 6:
        $nombre_dia = "Sábado";
        break;
    case 7:
        $nombre_dia = "Domingo";
        break;
    default:
        $nombre_dia = "No sabemos que día es";
}
echo $nombre_dia;
?>