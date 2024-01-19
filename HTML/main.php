<!DOCTYPE html>
<html>

<head>
    <title>Selecciona tu dispositivo</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="scripts.js"></script>

</head>

<body>
    <h1>SELECCIONA UN DISPOSITIVO</h1>
    <form action="opcionmovil.php" method="post">
    <div id="inicio">
        <div class="opcion0" onclick="mostrarOpciones('movil')">
            <p>MOVILES</p>
            <img id="movilimg" class="opcion" src="src/moviles.jpg" alt="Moviles">
        </div>
    
    <div class="opcion0" onclick="mostrarOpciones('pc')">
        <p>ORDENADORES</p>
        <img id="pcimg" class="opcion" src="src/pcgaming.jpg" alt="Ordenadores">
    </div>
    </div>
    </form>



    <h1>EXPORTAR DISPOSITIVOS</h1>
    <?php
    $conexion = new mysqli("localhost", "root", "", "dispositivos");
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $consulta = "SELECT * FROM movil";
    $resultado = $conexion->query($consulta);
    $archivo = fopen("BDMoviles.txt", "w");


    if ($archivo) {
        while ($fila = $resultado->fetch_assoc()) {
            fwrite($archivo, $fila['id'] . "\t" . $fila['marca'] . "\t" . $fila['modelo'] . "\t" . $fila['año'] . "\t" . $fila['pulgadas'] . "\t" . $fila['tipo_pantalla'] . "\t" . $fila['conectividad'] . "\n");
        }

        fclose($archivo);
    } else {
        echo "Error al abrir el archivo.";
    }
    echo '<center><a href="BDMoviles.txt" download>Exportar BD Moviles</a></center>';
    $conexion->close();
    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtenemos la imagen con el id "movilimg"
            var movilImage = document.getElementById('movilimg');

            // Agregamos un evento de clic a la imagen
            movilImage.addEventListener('click', function() {
                // Redirigimos al archivo "movil.php"
                window.location.href = 'opcionmovil.php';
            });
        });
    </script>

</body>

</html>