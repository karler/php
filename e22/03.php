<?php
    function devuelvemitad($texto){
        $longitud = strlen($texto);
        $m = $longitud /2;
        $m = round($m);
        $mtexto = substr($texto, 0, $m);
        return $mtexto;
    }

    $textocompleto = "Hola, soy: ALcaLÁ qUeloPANA";
    $mitad = devuelvemitad($textocompleto);
    echo $textocompleto."<br>";
    echo $mitad;
?>