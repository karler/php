<?php
//Variables
$a = 0;
$n = 0;
$p = 0;
if ( isset( $_POST["btnCalcular"] ) ) {
    //Entrada
    $a = ( int )$_POST["txta"];
    $n = ( int )$_POST["txtn"];
    //Proceso
    $p = pow( $a, $n );
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
    <form method="post" action="prueba.php">
        <table width="226" border="0">

            <tr>
                <td colspan="2"><strong>Problema 04
                    </strong></td>
            </tr>
            <tr>
                <td width="67">a
                </td>
                <td width="149">
                    <input name="txta" type="text" id="txta" value="<?=$a?>" />
                </td>
            </tr>
            <tr>
                <td>n</td>
                <td>
                    <input name="txtn" type="text" id="txtn" value="<?=$n?>" />
                </td>
            </tr>
            <tr>

                <td>Potencia</td>
                <td><input name="txtp" type="text" class="TextoFondo" id="txtp" value="<?=$p?>"></td>
            </tr>
            <tr>
                <td>&nbsp;
                </td>
                <td>
                    <input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
