<?php 
$id =$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar contraseña</title>
</head>
<body>
    <h1>Recuperación de contraseña</h1>
<form action="config/change_password.php" method="POST">
        <h3>Nueva contraseña:</h3>
    <input type="text" name="new_password">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <button type="submit">Recuperar contraseña</button>
    </form>
</body>
</html>