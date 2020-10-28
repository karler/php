<?PHP
    $num1 = 2;
    $num2 = 3;
    $num3 = 2;
    if ($num1 == $num2 and $num1 == $num3){
        echo "Los 3 números son iguales";
    }else{
        echo "Los 3 números no son iguales";
    }
    echo "<br><br>";
    $nombre1 = "Juan";
    $nombre2 = "Juan";
    if ($nombre1 == $nombre2){
        echo "Los nombres son iguales";
    }
    echo "<br><br>";
    $edad =15;
    switch ($edad){
        case ((0<=$edad) and ($edad<=10)):
            echo "Eres niño";
            break;
        case ((10<$edad) and ($edad<18)):
            echo "Eres adolecente";
            break;
        case ((18<=$edad) and ($edad<=25)):
            echo "Eres joven";
            break;
        case ((25<$edad) and ($edad<=100)):
            echo "Eres adulto";
            break;
    }
    echo "<br><br>";
    $num =3;
    switch ($num){
        case (3):
            echo "III";
            break;
        case (2):
            echo "II";
            break;
        case (1):
            echo "I";
            break;
        case 5:
            echo "IV";
            break;
        case 4:
            echo "V";
            break;
    }

    $num =3;
    if ($num == 1){
        echo "I";
    }else if ($num == 2){
        echo "II";
    }else if ($num == 3){
        echo "III";
    }else if ($num == 4){
        echo "IV";
    }else if ($num == 5){
        echo "V";
    }

?>