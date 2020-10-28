

<?php
$a = "";
$n = "";
$p = 0;

if (isset($_POST[btnCalcular])){
    $a = $_POST["txta"];
    $n = $_POST["txtn"];
    $p = pow( $a, $n);
    //echo "$a elevado a $n = $p";
}

?>
<html>
<head>
    <title>Ejercicio 07</title>
    <style type="text/css">
        <!--
        .TextoFondo {
            background-color: #CCFFFF;
        }
        -->
    </style>
</head>

<body>
    <form method="post" action="pag3.php">
        <input name="txta" type="text" id="txta" value="<?=$a?>">
        <input name="txtn" type="text" id="txtn" value="<?=$n?>">
        <?php
            echo " = ";
        ?>
        <input name="txtp" type="text" id="txtp" value="<?=$p?>">
        <input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular">
    </form>
</body>