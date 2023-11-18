<?php
include('conexion.php');

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consultar la base de datos para verificar las credenciales
    $con = conectar();
    $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
    $result = $con->query($sql);

    // Verificar si se encontraron coincidencias
    if ($result->num_rows > 0) {
        // Usuario autenticado con éxito
        cerrar($con); // Cerrar conexión antes de redireccionar
        header('Location: inicio.php');
        exit(); // Asegurarse de que el script se detenga después de la redirección
    } else {
        // Usuario no autenticado
        cerrar($con);
        header('Location: index.php?error=Usuario o contraseña incorrectos');
        exit();
    }
}
?>
