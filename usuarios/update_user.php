<?php
require_once('config.php');

$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$nombre = $_POST['nombre'];
$status = $_POST['status'];
$id = $_POST['id'];

$query = "UPDATE usuarios SET correo = '$correo', telefono = '$telefono', nombre = '$nombre', status ='$status' WHERE id=$id";
$conexion ->query($query);

header("Location: ../index.php");
?>