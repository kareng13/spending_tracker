<?php

require_once'config/validate_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
</head>
<body class="text-center">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">
        <a href="modules/gastos/index.php" class="btn btn-success">Gastos</a>
        <a href="gastos_categoria/index.php" class="btn btn-success">Gastos categoria</a>
        <a href="usuarios/index.php" class="btn btn-success">Usuarios</a>
    </div>
    </div>
    </div>
    <a href="config/logout.php">Cerrar sesion</a>
</body>
</html>