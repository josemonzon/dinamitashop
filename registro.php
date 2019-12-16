<?php
if ($_POST) {
  if ($_POST["password"] == $_POST["passwordConfirm"]) {
    $db = file_get_contents("usuarios.json");
    $usuarios = json_decode($db, true);
    $usuarios[] = [
      "email" => $_POST["email"],
      "usuario" => $_POST["usuario"],
      "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
    ];
    $db = json_encode($usuarios);
    file_put_contents('usuarios.json', $db);
  } else { }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro</title>
  <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


</head>
<header>
  <?php include("navbar.php");
  if ($_SESSION["usuario"]) {
    header('Location: index.php');
  }
  ?>
</header>

<body>

  <div class="container margenContacto">
    <div class="row">
      <div class="border rounded offset-lg-4 border rounded col-12 col-lg-4">
        <h5 class="my-3">Completá tus datos</h5>
        <form action="registro.php" method="POST" class="my-3">
          <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="usuario">Usuario</label>
            <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Usuario" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" onchange="if(this.checkValidity()) form.passwordConfirm.pattern = this.value;" type="password" class="form-control" id="password" placeholder="Password" required>
          </div>
          <div class="form-group">
            <label for="passwordConfirm">Repite la contraseña</label>
            <input name="passwordConfirm" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Las contraseñas no coinciden' : '');" type="password" class="form-control" id="passwordConfirm" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-outline-dark">Crear cuenta</button>
        </form>
      </div>
    </div>


    <body background="C:\laragon\www\dinamitashop\img\fondo.jpg">
  </div>
  <footer class="py-3">
    <div style="background: rgb(31, 31, 31) none repeat scroll 0 0" class="container-fluid py-3">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="col-12">
              <a class="navbar-brand text-light" style="font-family: 'Alata', sans-serif;" href="#">
                <img class="my-2" src="./img/logop.png" width="30" height="30" alt="">
                DINAMITA</a>
            </div>
            <div class="col-12 text-light">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
              laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
              beatae vitae dicta sunt explicabo.
            </div>
            <div class="col-12 text-secondary">
              email: contacto@dinamita.com
            </div>
            <div class="col-12 text-secondary">
              telefono: 3415555555
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="col-12 text-light">
              <a class="navbar-brand text-light" style="font-family: 'Alata', sans-serif;">
                Informacion</a>
            </div>
            <div class="col-12">
              <a class="navbar-brand text-secondary" style="font-family: 'Alata', sans-serif;" href="index.html">
                Home</a>
            </div>
            <div class="col-12">
              <a class="navbar-brand text-secondary" style="font-family: 'Alata', sans-serif;" href="faq.html">
                FAQ</a>
            </div>
            <div class="col-12">
              <a class="navbar-brand text-secondary" style="font-family: 'Alata', sans-serif;" href="registro.php">
                Registro</a>
            </div>
            <div class="col-12">
              <a class="navbar-brand text-secondary" style="font-family: 'Alata', sans-serif;" href="login.html">
                Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script>
    var pagActive = "registro";
  </script>
</body>

</html>