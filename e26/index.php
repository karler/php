<?php
    function creararray1($n){
        for($i = 1;$i <= $n; $i++){
            //$a = [$i => rand(0,100)];
            $a[$i] = rand(0,100);
        }
        return $a;
    }

    function mostrararray1($a){
        echo "<table style='width:100%; border:1px solid black'>";
        echo "<tr>";    
        foreach($a as $valor){
            echo "<td style='border:1px solid black'>$valor</td>";
        }
        echo "</tr>";   
        echo "</table>";
    }

    function creararray2($f,$c){
        //echo "<table>";
        for($j=1; $j<=$f; $j++){
            //echo "<tr>";
            for($i=1; $i<=$c; $i++){
                //echo "<td>";
                $a[$j][$i] = $j * $i;//rand(0,100);
                //echo $a[$j][$i];
                //echo "</td>";
            }
            //echo "</tr>";
        }
        //echo "</table>";
        return $a;
    }

    function mostrararray2($a, $f, $c){
        echo "<table style='width:100%; border:1px solid black'>";
        for($j=1; $j<=$f; $j++){
            echo "<tr>";
            for($i=1; $i<=$c; $i++){
                echo "<td style='border:1px solid black'>";
                echo $a[$j][$i];
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    function creararray3($f,$c){
        echo "<table>";
        for($j=1; $j<=$f; $j++){
            echo "<tr>";
            for($i=1; $i<=$c; $i++){
                echo "<td>";
                $a[$j][$i] = $j + $i;
                echo $a[$j][$i];
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        return $a;
    }

    $array1 = creararray1(25);
    mostrararray1($array1);
    $array2 = creararray2(10,5);
    mostrararray2($array2,10,5);
    $array3 = creararray3(10,5);
?>