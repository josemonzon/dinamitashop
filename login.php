<?php
// Inicio sesión
session_start();
// Inicio errores
$errores = [];
$db = file_get_contents('usuarios.json');
$usuarios = json_decode($db, true);
if ($_POST) {
    if (strlen($_POST['email']) < 3) {
        $errores['email'] = 'Debe ingresar su Email';
    }
    $usuario = $usuarios[array_search($_POST['email'], array_column($usuarios, 'email'))];
    if (!$usuario) {
        $errores['email'] = 'El email no existe';
    } else {
        if (password_verify($_POST['password'], $usuario['password'])) {
            $_SESSION['usuario'] = $usuario;
            if($_POST['recordarme'] == true){
                setcookie('usuario',json_encode($usuario),time()+604800);
            }
            header('Location: perfil.php');
        } else {
            $errores['password'] = 'La clave no es correcta';
        }
    }
} else {
    if(isset($_COOKIE['usuario'])){
        $_SESSION['usuario'] = json_decode($_COOKIE['usuario'],true);
    }
    if (isset($_SESSION['usuario'])) {
        header('Location: perfil.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" style="font-family: 'Alata', sans-serif;" href="index.html">
            <img class="my-2" src="./img/logop.png" width="30" height="30" alt="">
            DINAMITA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="faq.html">FAQ</a>
                <a class="nav-item nav-link" href="registro.php">Registro</a>
                <a class="nav-item nav-link active" href="login.php">Login</a>
                <a class="nav-item nav-link" href="contacto.html">Contacto</a>
                <a class="nav-item nav-link" href="perfil.php">Perfil</a>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <input id="buscarInput" class="input-group-text mr-sm-2 text-left" style="background-color: white"
                    type="search" placeholder="Buscar productos..." aria-label="Search">
                <button id="buscarBoton" class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
</header>



<body>
    <div class="border rounded container margenContacto">
        <form class="my-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recordar usuario</label>
              </div>
            <button type="submit" class="btn btn-outline-dark">Iniciar sesion</button>
        </form>

    </div>
    <footer class="foot">
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
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto
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
                            <a class="navbar-brand text-secondary" style="font-family: 'Alata', sans-serif;"
                                href="index.html">
                                Home</a>
                        </div>
                        <div class="col-12">
                            <a class="navbar-brand text-secondary" style="font-family: 'Alata', sans-serif;"
                                href="faq.html">
                                FAQ</a>
                        </div>
                        <div class="col-12">
                            <a class="navbar-brand text-secondary" style="font-family: 'Alata', sans-serif;"
                                href="registro.php">
                                Registro</a>
                        </div>
                        <div class="col-12">
                            <a class="navbar-brand text-secondary" style="font-family: 'Alata', sans-serif;"
                                href="login.html">
                                Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>