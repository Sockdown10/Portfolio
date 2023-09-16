<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrefun - Registro</title> 
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS interno -->
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        #fondo{
            background:rgb(255,255,255,0.7) !important;
        }
        label{
            font-weight:bold !important;
        }
    </style>
    
</head>
<body style="background-image:url('img/restaurante.jpg')">

    <div  class="d-flex justify-content-center align-items-center vh-100">
    <form id="fondo" action="config/signupcheck.php" method="post" class="shadow w-450 p-3 rounded">
        <h2 class="display-4  fs-1 text-center text-bg-primary rounded">REGISTRARSE</h2>

        <!--    zona de errores      -->

    <?php if(isset($_GET['error'])): ?>
        <p class="error"><?php echo $_GET['error'] ?> </p>

    <?php elseif(isset($_GET['success'])): ?>
        <p class="success"><?php echo $_GET['success']?></p>
    <?php endif; ?>


        <!--    zona de OK      -->
      
        <label class="form-label" for="uname">Nombre de usuario:</label>
        <input class="form-control" type="text" name="uname" id="user" placeholder= "Nombre de usuario" value="<?php echo $_GET['uname'] ?? '' ?>">

        <label class="form-label" for="pass">Contraseña:</label>
        <input class="form-control" type="password" name="pass" id="pass" placeholder="Contraseña">

        <label class="form-label" for="re_pass">Repite la contraseña:</label>
        <input class="form-control" type="password" name="re_pass" id="re_passs" placeholder="Repite la contraseña">
        

        <div class="botones d-flex justify-content-between">
        <button class="btn btn-primary m-1" type="submit">Registrarse (Sign up)</button>
        <a class="btn btn-warning m-1" href="index.php">Ya estoy registrado</a>
</div>

    </form>
    </div>
</body>
</html>