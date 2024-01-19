<!-- Funciones, crear dispositivos, listar dispositivos, editar dispositivos -->
<?php
include_once('main.php');
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "dispositivos";

$conexion = new mysqli($servidor, $usuario, $password, $bd);

if ($conexion->connect_error) {
    die("Error de conexión " . $conexion->connect_error);
}

// Supongamos que $opcion_seleccionada contiene el valor seleccionado del formulario
$opcion_seleccionada = $_POST['opcion'];

// Insertar el valor en la base de datos
$sql = "INSERT INTO movil (marca) VALUES ('$opcion_seleccionada')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos insertados con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>