<?php
function conectar() {
    // Conectar a la base de datos
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "aprenderprogramacion1";
    $con = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Verificar la conexión
    if ($con->connect_error) {
        die("Conexión fallida: " . $con->connect_error);
    }

    return $con; // Devolver la conexión para su uso posterior
}

function cerrar($con) {
    $con->close();
}
?>
