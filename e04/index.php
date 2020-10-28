<?PHP
    $valor = 12;
    if(($valor >= 0) && ($valor < 11)){
        echo "Nota muy baja";
    }else if(($valor >= 11) && ($valor < 19)){
        echo "Buena nota";
    }else if(($valor >= 19) && ($valor <= 20)){
        echo "Excelente nota";
    }
    
    echo "<br>Utilizanzo Switch Case<br>";
    switch($valor)
    {
        case ($valor >= 0 && $valor < 11):
            echo "Nota muy baja";
            break;
        case (($valor >= 11) && ($valor < 19)):
            echo "Buena nota";
            break;
        case (($valor >= 19) && ($valor <= 20)):
            echo "Excelente nota";
        break;
    }
?>
