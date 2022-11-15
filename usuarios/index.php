<?php
require_once('../config/config.php');
$query = "SELECT * FROM usuarios";
$result = $conexion->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spending_tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">
                <h1>Usuarios<a href="form_insert.php" class="btn btn-primary">Añadir</a></h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Nombre</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['correo']?></td>
                            <td><?php echo $row['telefono']?></td>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['status']?></td>
                            <td>
                                <a href="form_update.php?id=<?php echo $row['id']?>" class="btn btn-warning">Editar</a>
                                <a href="delete_user.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="text-center">
                <a href="../bienvenido.php">Regresar</a>
        </div>
</body>
</html>