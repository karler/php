<?php
    function devuelvenombrecompleto($nombre, $apellido){
        //convirtiendo a minusculas
        $nom = strtolower($nombre);
        $nom = ucwords($nom);
        $ape = strtoupper($apellido);
        $nombcompl = $ape.", ".$nom;
        return $nombcompl;
    }

    $nombre = "jose LUIS";
    $apellido = "ALcaLÁ qUeloPANA";
    $nc = devuelvenombrecompleto($nombre, $apellido);
    echo $nc;
    //ALCALÁ QUELOPANA, Jose Luis
?>