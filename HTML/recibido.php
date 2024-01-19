<?php

// Ruta al archivo HTML que deseas leer (ajusta la ruta según tu estructura de archivos)
$archivoHTML = 'gracias.html';

// Comprueba si el archivo HTML existe antes de intentar leerlo
if (file_exists($archivoHTML)) {
    // Leer y mostrar el contenido del archivo HTML
    readfile($archivoHTML);
} else {
    echo "El archivo HTML no existe en la ruta especificada.";
}

// Detener la ejecución del script
exit;
?>
