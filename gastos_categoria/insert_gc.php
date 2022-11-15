<?php
require_once('../config/config.php');

$nombre = $_POST['nombre'];

$query = "INSERT INTO gastos_categoria (nombre) VALUES ('$nombre')";
$conexion ->query($query);

header("Location: index.php");
?>