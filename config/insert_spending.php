<?php
require_once('config.php');

$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];

$query = "INSERT INTO gastos (cantidad, categoria, descripcion) VALUES ('$cantidad', '$categoria', '$descripcion')";
$conexion ->query($query);

header("Location: ../index.php");
?>