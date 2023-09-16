<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <!-- ------zona errores---------- -->

        <?php if (isset($_GET['error'])): ?>

        <div class=" alert alert-danger text-center" role="alert">

            <?php echo $_GET['error'] ?>


        </div>
        <?php endif; ?>




        <!--    ------zona todo ok---------- -->

        <?php if (isset($_GET['success'])): ?>

        <div class=" alert alert-success text-center" role="alert">

            <?php echo $_GET['success'] ?>


        </div>
        <?php endif; ?>

        <div class="card">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="h-100 d-flex justify-content-center align-items-center">
                        <div class="py-4 px-3">
                            <h4>Registrarse</h4>
                            <form action="php/signup.php" method="post">
                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <div class="input-field"> <input type="text" class="form-control" id="nombre"
                                                name="nombre"
                                                value="<?php echo isset($_GET['nombre']) ? $_GET['nombre'] : "" ?>">
                                            <label for="nombre">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field"> <input type="text" class="form-control" id="apellidos"
                                                name="apellidos"
                                                value="<?php echo isset($_GET['apellidos']) ? $_GET['apellidos'] : "" ?>">
                                            <label for="apellidos">Apellidos</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <div class="input-field"> <input type="text" class="form-control" id="username"
                                                name="username"
                                                value="<?php echo isset($_GET['username']) ? $_GET['username'] : "" ?>">
                                            <label for="username">Usuario</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <div class="input-field"> <input type="email" class="form-control" id="email"
                                                name="email"
                                                value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2 mb-2">
                                    <div class="col-md-12">
                                        <div class="input-field"> <input type="password" class="form-control" id="pass"
                                                name="pass"> <label for="pass">Contraseña</label> </div>
                                    </div>
                                </div>
                                <div class="row mt-2 mb-2">
                                    <div class="col-md-12">
                                        <div class="input-field"> <input type="password" class="form-control" id="rpass"
                                                name="rpass"> <label for="rpass">Repetir contraseña</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12"> <button
                                            class="btn btn-primary w-100 signup-button">Enviar</button> </div>
                                </div>

                                <div class="member mt-1"> <span>
                                        ¿Ya eres usuario?
                                    </span> <a class="text-decoration-none" href="../../index.php">
                                        Entrar
                                    </a> </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-side-content">
                        <div class="content d-flex flex-column">
                            <h6>TALENTUM</h6> <span>Regístrate hoy y desbloquea un mundo de posibilidades</span>
                        </div>
                        <div class="right-side"> <span></span> <span></span> <span></span> <span></span> <span><img
                                    src="https://i.imgur.com/kWmyZvb.jpg"> </span> <span></span> <span></span>
                            <span></span> <span> <img src="https://i.imgur.com/U0863iD.jpg"> </span> <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallelogram"> <span></span> <span></span> <span></span> </div>
    </div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>