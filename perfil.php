<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Perfil</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body>
    <?php include("navbar.php") ?>
    <div class="border rounded container margenContacto">
        <div class="row my-3">
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#carrito" data-toggle="tab" class="nav-link">Carrito</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Editar Perfil</a>
                    </li>
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active" id="profile">
                        <h5 class="mb-3">Perfil</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Nombre</h6>
                                <p>
                                    Santi
                                </p>
                                <h6>Apellido</h6>
                                <p>
                                    Argilla
                                </p>
                            </div>
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span>Últimas
                                    compras</h5>
                                <table class="table table-sm table-hover table-striped">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>Vans</strong>Zapatillas super flamas<strong>$ 2.400</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Vans</strong>Zapatillas super flamas<strong>$ 2.400</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Vans</strong>Zapatillas super flamas<strong>$ 2.400</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/row-->
                    </div>

                </div>
            </div>
            <div class="col-lg-4 order-lg-1 text-center">
                <img src="https://media.licdn.com/dms/image/C4E03AQGTsY_h6x_OUg/profile-displayphoto-shrink_800_800/0?e=1579737600&v=beta&t=lp1VXIvrMIUWNv5C3bLsVvHJ-zm1jeiNlqSQj4ZE_Ok" style="border-radius: 50%; width: 150px; height: 150px;" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input">
                    <button class="btn"><span class="custom-file-control">Elegir foto</span></button>
                </label>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>