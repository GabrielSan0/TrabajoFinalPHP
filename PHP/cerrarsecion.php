<?php
session_start(); // Inicia la sesión

// Destruye todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirige al usuario a la pantalla de inicio de sesión
header("Location: ../index.php");
exit();
?>