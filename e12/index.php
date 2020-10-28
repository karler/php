<html>
<head>
</head>
<body>

<?php
    //Crear 100 números aleatorios en una array y despues colocar un mensaje mostrando si es multiplo de 5 y 7
    echo '<br><br>';
    $num1 = 1;
    $num2 = 100;
    $numa = 0;

    while ( $num1 <= $num2 ) {
        $num[] = rand( 1, 100 );
        $num1++;
    }
    $i = 0;
    $num1 = 1;
    while ( $num1 <= $num2 ) {
        if ($num[$i] % 5 == 0){
            echo $num[$i]." Multimplo de 5<br>";
        }
        if ($num[$i] % 7 == 0){
            echo $num[$i]." Multimplo de 7<br>";
        }
        if ($num[$i] % 3 == 0){
            echo $num[$i]." Multimplo de 3<br>";
        }
        $i++;
        $num1++;
    }
?>
</body>
</html>