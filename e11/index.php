<html>
<head>

<style>
    .azul{
        color: blue;
    }
    .rojo{
        color: red;
    }
</style>
</head>
<body>
    <?php
        //Generar 100 números aleatorios y colorear de rojo los impares y de azul los pares
        $liminf = 1;
        $limsup = 100;
        while ($liminf <= $limsup){
            $num = rand(1,100);
            if ($num % 2 == 0){//par
                echo "<p class='azul'>$num</p>";
            }else{//impar
                echo "<p class='rojo'>$num</p>";
            }
            $liminf++;
        }
    ?>
</body>
</html>