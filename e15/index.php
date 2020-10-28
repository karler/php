<?php
    //Funciones
    function mensaje1(){
        echo "Hola Mundo<br>";
    }
    mensaje1();

    //variable global
    $a = 777;
?>

<?php
    //Funciones con parámetros
    function mensaje2($texto){
        echo "$texto<br>";
    }
    mensaje2("Soy Jose");
    $nom = "Soy Jose Luis";
    mensaje2($nom);
?>

<?php
    //Funciones con parámetros
    function nombrecompleto1($nombre, $apellidos){
        echo strtoupper($apellidos).", ".ucfirst($nombre)."<br>";
    }
    nombrecompleto1("juan","Pimentel Zegarra");
?>

<?php
    //Funciones con parámetros predeterminados
    function nombrecompleto2($nombre = 'Juan', $apellidos = 'Bautista'){
        echo strtoupper($apellidos).", ".ucfirst($nombre)."<br>";
    }
    nombrecompleto2("luis","Pimentel Zegarra");
    nombrecompleto2("Carlos");
?>

<?php
    //Función con valores devueltos
    function suma($a, $b){
        $suma = $a + $b;
        return $suma;
    }

    $c = suma(3,5);
    echo "La suma es $c<br>";
    echo "La suma es ".suma(3,4)."<br>";   
?>

<?php
    echo "Variable global a: $a<br>";
    echo $suma;
?>

<?php
    //Funcion con argumento por referencia
    //Cambiar el valor de un parámetro
    function resta($a, $b, &$r){
        $r = $a - $b;
    }
    $resultado = 100;
    resta(5,3,$resultado);
    echo "$resultado <br>";
?>
