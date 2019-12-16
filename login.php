<?php
// Inicio errores
$db = file_get_contents('usuarios.json');
$usuarios = json_decode($db, true);
$errorAMostrar = "nada";
if ($_POST) {
    $index = array_search($_POST['email'], array_column($usuarios, 'email'));
    if (is_bool($index)) {
        $errores['email'] = "No existe el usuario";
    } else {
        $usuario = $usuarios[$index];
        if (password_verify($_POST['password'], $usuario['password'])) {
            session_start();
            $_SESSION["usuario"] = $usuario;
            header('Location: perfil.php');
        } else {
            $errores['password'] = 'La clave no es correcta';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<script>
    var pagActive = "login";
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <?php include("navbar.php") ?>
</header>
<!-- Modal -->
<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<body>
    <div class="container margenContacto">
        <div class="row">
            <div class="offset-lg-4 border rounded col-12 col-lg-4">
            <h5 class="my-3">Completá tus datos</h5>
                <form action="login.php" method="POST" class="my-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input value="<?php if ($_POST && empty($errores['email'])) {
                                            echo $_POST['email'];
                                        } ?>" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Recordar usuario</label>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Iniciar sesion</button>
                </form>
            </div>
        </div>


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
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script>
        function mostrarModal(titulo, error) {
            $('.modal').on('show.bs.modal', function(event) {
                var modal = $(this)
                modal.find('.modal-title').text(titulo)
                modal.find('.modal-body').text(error)
            })
            $(".modal").modal('show');
        }
    </script>
    <?php
    if (empty($errores["email"])) {
        if (empty($errores["password"])) { } else {

            $errorAMostrar = $errores["password"];
            echo '<script>mostrarModal("Error", "' . $errorAMostrar . '");</script>';
        }
    } else {
        $errorAMostrar = $errores["email"];
        echo '<script>mostrarModal("Error", "' . $errorAMostrar . '");</script>';
    }
    ?>
</body>

</html>