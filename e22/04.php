<?php
    function buscax($texto){
        $posx = stripos($texto, "x");
        if ($posx == FALSE){
            $mems = "No hay x";
        }else{
            $mems = "Si hay x en la posición $posx";
        }
        return $mems;
    }

    $textocompleto = "Hola, soy: ALcaLÁ qxUeloPANA";
    $mensaje = buscax($textocompleto);
    echo $mensaje."<br>";
?>