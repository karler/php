<?php
    $a = "";
    $b = "";
    $s = "";
    if (isset($_POST[btnCalcular])){
    $a = $_POST["txta"];
    $b = $_POST["txtb"];
    $s = $a + $b;
    }
?>
<html>
<head>
   <title>Ejercicio 08</title>
</head>
<body>

<form method="post" action="index.php">
    <table>
        <tr>
            <td>A = </td><td><input name="txta" type="text" id="txta" value="<?=$a?>"></td>
        </tr>
        <tr>
            <td>B = </td><td><input name="txtb" type="text" id="txtb" value="<?=$b?>"></td>
        </tr>
        <tr>
            <td>Suma = </td><td><input name="txts" type="text" id="txts" value="<?=$s?>"></td>
        </tr>
        <tr>
            <td></td><td><input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular"></td>
        </tr>
    </table>
</form>
</body>