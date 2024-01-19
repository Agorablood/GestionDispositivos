<?php
include_once('Dispositivo.php');
include_once('Movil.php');
include_once('Pc.php');
include_once('Conexion.php');

// Recuperar los datos del formulario
$tipo = $_POST['tipo']; // Puede ser 'movil' o 'pc'
$marca =$_POST['marca'];//marca del formulario
$modelo = $_POST['modelo']; // modelo del formulario

//creamos la conexion
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "dispositivos";

$conexion = new mysqli($servidor, $usuario, $password, $bd);

if ($conexion->connect_error) {
    die("Error de conexión " . $conexion->connect_error);
}
// Insertar datos en la tabla adecuada
if ($tipo === 'movil') {
    $sql = "INSERT INTO moviles (marca, modelo) VALUES ('$marca' )";
} elseif ($tipo === 'pc') {
    $sql = "INSERT INTO pcs (marca, modelo) VALUES ('$modelo' )";
}

if ($conn->query($sql) === TRUE) {
    echo "Datos almacenados en la base de datos.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
