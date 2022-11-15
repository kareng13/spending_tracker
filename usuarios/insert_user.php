<?php
require_once('../config/config.php');

$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$nombre = $_POST['nombre'];
$status = $_POST['status'];

$query = "INSERT INTO usuarios (correo, telefono, nombre, status) VALUES ('$correo','$telefono','$nombre','$status')";
$conexion ->query($query);

header("Location: index.php");
?>