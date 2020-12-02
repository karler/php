<?php
    session_start();
?>

<html>
    <head>
        <title>Pagina 3</title>
    </head>
    <body>
        <?php
        echo "Nombre de usuario:" . $_SESSION['usuario'];
        echo "<br><br>";
        echo "La clave:" . $_SESSION['clave'];
        echo "<br><br>";

        //if(isset($_SESSION['email'])){
        //    echo "email:".$_SESSION['email'];
        //}else{
        //    echo "No existe la variable session 'email'";
        //}
        
        ?>
    </body>
</html>