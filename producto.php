<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>FAQ</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</head>

<body>
  <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" style="font-family: 'Alata', sans-serif;" href="index.html">
      <img class="my-2" src="./img/logop.png" width="30" height="30" alt="">
      DINAMITA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mr-auto">
        <a class="nav-item nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="faq.html">FAQ</a>
        <a class="nav-item nav-link" href="registro.html">Registro</a>
        <a class="nav-item nav-link" href="login.html">Login</a>
        <a class="nav-item nav-link" href="contacto.html">Contacto</a>
        <a class="nav-item nav-link" href="perfil.html">Perfil</a>
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
  <div class="border rounded container margenContacto">
    <div class="row">
      <div class="col-12 col-lg-6">
        <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
      </div>
      <div class="col-12 col-lg-6">
        <div class="row my-3">
          <div class="col-12">
            <h5>Vans Super Flama</h5>
            <h6>Zapatillas Vans Super Flama</h6>
            <h5>$2999.99</h5>
          </div>
          <div class="col-12 my-3">
            <h6>Talles</h6>
            <select class="custom-select mr-1">
              <option selected>Seleccione un talle</option>
              <option value="1">41</option>
              <option value="2">42</option>
              <option value="3">43</option>
            </select>
          </div>
          <div class="col-12 my-3">
            <h6>Color</h6>
            <select class="custom-select mr-1">
              <option selected>Seleccione un color</option>
              <option value="1">Verdes</option>
              <option value="2">Azules</option>
              <option value="3">Negras</option>
            </select>
          </div>
          <div class="col-12">
            <button type="button" class="btn btn-outline-dark btn-block mt-3">Añadir al carrito</button>
          </div>
          <div class="col-12">

            <button type="button" class="btn btn-outline-dark btn-block mt-3">
              <ion-icon name="heart"></ion-icon> Añadir a favoritos
            </button>
          </div>
        </div>
      </div>

    </div>

  </div>


  <footer class="mt-3">
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
              <a class="navbar-brand text-secondary" style="font-family: 'Alata', sans-serif;" href="faq.html">
                Registro</a>
            </div>
            <div class="col-12">
              <a class="navbar-brand text-secondary" style="font-family: 'Alata', sans-serif;" href="faq.html">
                Login</a>
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
</body>

</html>