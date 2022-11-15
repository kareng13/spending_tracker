<?php
require_once('config.php');
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE correo = '$email' AND password='$password' AND status = 1";

$result = $conexion->query($query);

if($result->num_rows>0){
    session_start();
    $_SESSION['user'] = $email;
    header("Location: ../bienvenido.php");
}else{
    header("Location: ../index.php"); 
}
?>