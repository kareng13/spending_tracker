<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="styles\style.css" rel="stylesheet">
    <title>Spending_tracker</title>
</head>
<body class="text-center">
<main class="form-signin w-100 m-auto">
  <form action="config/login.php" method="POST">
    <h1>Hola</h1>
    <h1 class="h3 mb-3 fw-normal">Por favor, inicia sesión</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <a href="recovery.php">¿Olvidaste tu contraseña?</a>

    <?php
    if(isset($_GET['message'])){
      ?>
      <div class="alert alert-primary" role="alert">
        <?php
        switch($_GET['message']){
          case 'ok':
            echo 'Por favor, revisa tu correo';
            break;
            default: 
            echo 'Algo salió mal, intenta de nuevo';
        }
        ?>
      </div>
      <?php
    }
    ?>
  </form>
</main>

</body>
</html>