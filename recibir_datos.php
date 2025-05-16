<?php
// Habilita CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Configura zona horaria de Argentina
date_default_timezone_set('America/Argentina/Buenos_Aires');

if (isset($_POST['temperatura'])) {
    $temperatura = $_POST['temperatura'];
    $fecha = date('Y-m-d H:i:s');
    $linea = "$fecha - $temperatura\n";

    file_put_contents("datos_temperatura.txt", $linea, FILE_APPEND);
    echo "Dato recibido: $linea";
} else {
    echo "No se recibió ningún dato.";
}
?>
