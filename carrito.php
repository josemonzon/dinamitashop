<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

  <link rel="stylesheet" href="style.css">
  <title>Carrito</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">

</head>

<body>
  <?php include("navbar.php") ?>
  <div class="border rounded container margenContacto">
    <!-- stepper -->
    <div class="bs-stepper">
      <div class="bs-stepper-header" role="tablist">
        <!-- your steps here -->
        <div class="step" data-target="#logins-part">
          <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
            <span class="bs-stepper-circle">1</span>
            <span class="bs-stepper-label">Carrito</span>
          </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#information-part">
          <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
            <span class="bs-stepper-circle">2</span>
            <span class="bs-stepper-label">Informacion de entrega</span>
          </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#information-part">
          <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
            <span class="bs-stepper-circle">3</span>
            <span class="bs-stepper-label">Pago</span>
          </button>
        </div>
      </div>
      <div class="bs-stepper-content">
        <!-- your steps content here -->
        <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger"></div>
        <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger"></div>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <img style="max-width:200px" class="img-thumbnail" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="" srcset="">
                </div>
                <div class="col-12 col-lg-4">
                  <h5>Zapatillas Vans</h5>
                  <p class="text-muted my-0">Color: Negro</p>
                  <p class="text-muted my-0">Talle: 42</p>
                </div>
              </div>
            </th>
            <td>99 USD</td>
            <td><input type="number"></td>
            <td>
              <a href="editar.html">Editar</a>
              <br>
              <a href="fav.html">Añadir a favoritos</a>
              <br>
              <a href="borrar.html">Borrar</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>














    <div class="row mb-3">
      <div class="col-4 col-sm-4 col-lg-2">

      </div>
      <div class="col-6 col-sm-4 col-lg-2">
        <div class="my-3">

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
  <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
</body>

</html>