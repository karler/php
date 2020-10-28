<?PHP
    $a = 6;
    while ($a >= 5 && $a <= 10){
        echo "a = $a <br>";
        $a = $a + 1;
    }
    echo "<br>Termino el While";
    
    $years = array();
    $year = 1990;
    while ($year <= 2000) {
        $years[] = $year;
        $year++;
    }
    print_r($years);
?>