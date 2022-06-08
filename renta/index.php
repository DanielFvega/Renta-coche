<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/stylesLogin.css">
  <title>Registrar</title>
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
</head>

<body>
  <h3>RENT A CAR</h3>
  <div class="container">
    <div class="top-header">
      <h3>INICIAR SESIÓN</h3>
    </div>
    <!--Inputs para login  -->
    <form method="POST" action="home.php">
      <div class="user">
        <i class="bx bxs-user-circle"></i>
        <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Nombre de usuario" required autofocus>
      </div>
      <div class="pass">
        <i class="bx bxs-lock-alt"></i>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
      </div>
      <div class="checkbox">
      </div>
      <div class="btn">
      <button type="submit">Sign in</button>
      </div>
    </form>
    <p class="last2">Olvide mi contraseña?<a href="restablecer.php">Restablecer</a></p>
  </div>
  <p class="last">No tienes contraseña? <a href="registrar.php">Registrarse</a></p>
</body>

</html>