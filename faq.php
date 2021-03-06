<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>FAQ</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</head>
<script>
  var pagActive = "faq";
</script>
<body>
  <?php include("navbar.php") ?>
  <div class="border rounded container margenContacto">
    <h5 class="my-3">
      Preguntas frecuentes sobre nuestros productos
    </h5>
    <p>
      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample"
        aria-expanded="false" aria-controls="collapseExample">
        ¿Son productos originales?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample">
      <div class="card card-body">
        Son productos originales de excelente calidad
      </div>
    </div>
    <p>

      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample2"
        aria-expanded="false" aria-controls="collapseExample2">
        ¿Cuanto demora el producto para llegar a mi casa?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample2">
      <div class="card card-body">
        Tiene una demora de 15-20 dias hábiles una vez realizada la compra
      </div>
    </div>
    <p>
      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample3"
        aria-expanded="false" aria-controls="collapseExample3">
        ¿Desde donde los envian?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample3">
      <div class="card card-body">
        Desde EstadosUnidos
      </div>
    </div>
    <p>

      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample4"
        aria-expanded="false" aria-controls="collapseExample4">
        ¿Tienen Stock?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample4">
      <div class="card card-body">
        Tenemos Stock de todos nuestros productos publicados
      </div>
    </div>
    <p>

      <button class="btn btn-outline-dark type="button" data-toggle="collapse" data-target="#collapseExample5"
        aria-expanded="false" aria-controls="collapseExample5">
        ¿Tienen cambio por falla del producto?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample5">
      <div class="card card-body">
        Cambio directo por 30 dias habiles
      </div>
    </div>
    <p>

      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample6"
        aria-expanded="false" aria-controls="collapseExample6">
        ¿Aceptan cualquier tipo de tarjetas de credito o debito?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample6">
      <div class="card card-body">
        Todos los tipos de tarjetas , menos Naranja VISA
      </div>
    </div>
    <p>

      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample7"
        aria-expanded="false" aria-controls="collapseExample7">
        ¿Que talles tienen?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample7">
      <div class="card card-body">
        Los publicados
      </div>
    </div>
    <p>

      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample8"
        aria-expanded="false" aria-controls="collapseExample8">
        ¿Cuanto demora el producto para llegar a mi casa?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample8">
      <div class="card card-body">
        Tiene una demora de 15-20 dias hábiles una vez realizada la compra
      </div>
    </div>

    <form>
      <h5>
          Ayudanos a mejorar , Dejanos tu consulta.
      </h5>
        <div class="form-group">
          <label for="exampleFormControlInput1">Correo electronico</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@hotmail.com">
        </div>
        
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Tu consulta</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
        </div>
      </form>
      <button type="submit" class="btn btn-outline-dark mb-3">Enviar</button>

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