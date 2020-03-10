<nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" style="font-family: 'Alata', sans-serif;" href="index.php">
    <img class="my-2" src="./img/logop.png" width="30" height="30" alt="">
    DINAMITA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mr-auto">
      <a id="nav-index" class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a id="nav-faq" class="nav-item nav-link" href="faq.php">FAQ</a>
      <a id="nav-registro" class="nav-item nav-link" href="registro.php">Registro</a>
      <a id="nav-login" class="nav-item nav-link" href="login.php">Login</a>
      <a id="nav-contacto" class="nav-item nav-link" href="contacto.php">Contacto</a>
      <a id="nav-perfil" class="nav-item nav-link" href="perfil.php">Perfil</a>
    </div>
    <form class="form-inline my-2 my-lg-0">
      <a href="carrito.php"><button type="button" class="btn btn-outline-dark mr-sm-2">
          <ion-icon id="cart" class="mt-1" name="cart"></ion-icon>
        </button></a>
      <input id="buscarInput" class="input-group-text mr-sm-2 text-left" style="background-color: white" type="search" placeholder="Buscar productos..." aria-label="Search">
      <button id="buscarBoton" class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
<script>
  window.addEventListener('load', function() {
    switch (pagActive) {
      case "faq":
        $("#nav-faq").addClass("active");
        break;
      case "registro":
        $("#nav-registro").addClass("active");
        break;
      case "login":
        $("#nav-login").addClass("active");
        break;
      case "contacto":
        $("#nav-contacto").addClass("active");
        break;
      case "perfil":
        $("#nav-perfil").addClass("active");
        break;
    }
  })
</script>
<?php
if ($_GET) {
  if ($_GET["cerrarSesion"] == true) {
    session_destroy();
    setcookie("usuario", null, -1);
    header("Location: index.php");
  }
}
if (isset ($_SESSION)) {
  if (isset ($_SESSION["usuario"])) {
    echo "<script>window.addEventListener('load', function() {
        $('#nav-perfil').removeClass('disabled');
        $('#nav-login').addClass('disabled');
        $('#nav-registro').addClass('disabled');
      })</script>";
  }
}

?>