<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "dispositivos";

if (isset($_POST['opcion'])) {
    $opcionSeleccionada = $_POST['opcion'];
    $opcionSeleccionada1 = $_POST['opcion1'];
    $opcionSeleccionada2 = $_POST['opcion2'];
    $opcionSeleccionada3 = $_POST['opcion3'];
    $opcionSeleccionada4 = $_POST['opcion4'];
    $opcionSeleccionada5 = $_POST['opcion5'];

    // $movil = new Movil($opcionSeleccionada, $opcionSeleccionada1,$opcionSeleccionada2,$opcionSeleccionada3,$opcionSeleccionada4,$opcionSeleccionada5);
    

    // Establecemos la conexión a la base de datos
    $conexion = new mysqli($servidor, $usuario, $password, $bd);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Query SQL para insertar el valor en la tabla "movil"
    $sql = "INSERT INTO movil (marca, modelo, año, pulgadas,tipo_pantalla, conectividad) VALUES ('$opcionSeleccionada','$opcionSeleccionada1','$opcionSeleccionada2','$opcionSeleccionada3','$opcionSeleccionada4','$opcionSeleccionada5')";

    if ($conexion->query($sql) === TRUE) {
        echo "Datos insertados con éxito";
        header("Location: recibido.php");
        

    } else {
        echo "Error al insertar datos: " . $conexion->error;
    }

    $conexion->close();
} else {
    echo "No se ha seleccionado ninguna opción.";
}
