<?php
session_start(); // Iniciar sesión (si no se ha iniciado aún)
include 'conexion_be.php';

$correo = $_POST['correo'];
$pasword = $_POST['pasword'];

$query = "SELECT * FROM usuarios WHERE Email='$correo' AND PASWORD='$pasword'";
$resultado = mysqli_query($conexion, $query);

if (mysqli_num_rows($resultado) > 0) {
    $_SESSION['correo'] = $correo; // Almacenar el correo en la sesión
    header("Location: inicio.php"); // Redirigir a la página de inicio (puedes cambiar el nombre del archivo si lo necesitas)
} else {
    echo '<script>alert("Correo o contraseña incorrectos"); window.location = "../index.php";</script>';
}
?>