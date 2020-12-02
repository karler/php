<html>
    <head>
        <title>Guardar</title>
    </head>
<body>
    <?php
        // Crea la connección
        $servername = "localhost";
        $database = "miscontactos";
        $username = "root";
        $password = "";
        $conexion = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conexion) {
            die("Conexión fallida: " . mysqli_connect_error());
        }
        echo "Conexión exitosa <br>";

        //Recopilando los datos a guardar
        $nombre = $_REQUEST['nombre'];
        $apellidos = $_REQUEST['apellidos'];
        $email = $_REQUEST['email'];
        $celular = $_REQUEST['celular'];
        $sql = "INSERT INTO contactos(nombre,apellidos,email,celular) value ('$nombre', '$apellidos', '$email', '$celular')";
        if (mysqli_query($conexion, $sql)) {
            echo "El regitro ha sido creado satisfactoriamente<br>";
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }

        //Cerrando la conexion
        mysqli_close($conexion);
    ?>
</body>
</html>
