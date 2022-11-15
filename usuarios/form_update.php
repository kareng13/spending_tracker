<?php 
require_once("../config/config.php");
$id=$_GET['id'];
$query = "SELECT * FROM usuarios WHERE id=$id";
$result = $conexion->query($query);

$record = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Usuarios</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h1>Usuarios</h1><a href="index.php" class="btn btn-dark">Regresar</a>
            </div>
        </div>
        <form action="../update_user.php" method="POST">
        <div class="row" mt-5>
            <div class="col-6">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo" id="correo" value="<?php echo $record['correo'];?>">
            </div>
            <div class="col-6">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $record['telefono'];?>">
            </div>
            <div class="col-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $record['nombre'];?>">
            </div>
            <div class="col-6">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" name="status" id="status" value="<?php echo $record['status'];?>">
            </div>
            <div class="col-12 my-3">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <button type="submit" class="btn btn-success">Guardar</button>
        </div>
        </form>
</body>
</html>