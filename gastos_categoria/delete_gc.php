<?php
require_once('../config/config.php');

$id = $_GET['id'];

$query = "DELETE FROM gastos_categoria WHERE id = '$id'";
$conexion ->query($query);

header("Location: index.php");
?>