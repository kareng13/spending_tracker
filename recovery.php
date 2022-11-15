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
  <form action="config/recovery.php" method="POST">
    <h1>Hola</h1>
    <h1 class="h3 mb-3 fw-normal">Por favor, ingresa tu correo</h1>

    <div class="form-floating my-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Recuperar contraseña</button>
  </form>
</main>

</body>
</html>