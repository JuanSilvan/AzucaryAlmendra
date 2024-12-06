<?php 
include 'conexion.php'; // Comillas simples correctas

$nombre_completo = $_POST['nombre_completo']; // Comillas simples correctas
$email = $_POST['email']; // Comillas simples correctas
$usuario = $_POST['usuario']; // Comillas simples correctas
$contrasena = $_POST['contrasena']; // Comillas simples correctas

$query = "INSERT INTO usuarios(nombre_completo, email, usuario, contrasena)
        VALUES('$nombre_completo', '$email', '$usuario', '$contrasena')"; // Comillas simples estándar
$ejecutar = mysqli_query($conexion, $query); // Variable corregida
?>
