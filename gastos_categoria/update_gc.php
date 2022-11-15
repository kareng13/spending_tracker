<?php 
require_once("../config/config.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];

$query = "UPDATE gastos_categoria SET nombre='$nombre' WHERE id=$id";
$conexion -> query($query);

header("Location: index.php")
?>