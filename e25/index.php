 <?php
    for($i=1; $i <=100; $i++){
        $edades[$i] = rand(0, 120);
    }
    //Calcular cuantos hay entre 18 y 100
    $c1 = 0;
    for($i=1; $i <=100; $i++){
        if($edades[$i] >=18 and $edades[$i]<=100){
            $c1++; // $c1 = $c1 + 1;
        }
    }
    //Calcular cuantos tienen 20 o 50
    $c2 = 0;
    for($i=1; $i <=100; $i++){
        if($edades[$i] = 20 or $edades[$i] = 50){
            $c2++;
        }
    }
    echo "Entre 18 y 100: $c1 <br>";
    echo "Tienen 20 ó 50: $c2 <br>";

 ?>