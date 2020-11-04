<?php
    function devuelvenombre($nombrecompleto){
        $poscoma = stripos($nombrecompleto,",");
        echo $poscoma."<br>";
        $nom = substr($nombrecompleto,$poscoma+2);
        $nom = strtolower($nom);
        $nom = ucwords($nom);
        //echo $nom;
        return $nom;
    }

    function devuelveapellido($nombrecompleto){
        $poscoma = stripos($nombrecompleto,",");
        $ape = substr($nombrecompleto,0,$poscoma);
        $ape = strtolower($ape);
        $ape = ucwords($ape);
        return $ape;
    }

    $nc = "PIMENTEL zegarra, roberto CARLOS";
    $nombre = devuelvenombre($nc);
    echo $nombre."<br>";
    $apellido = devuelveapellido($nc);
    echo $apellido."<br>";
?>