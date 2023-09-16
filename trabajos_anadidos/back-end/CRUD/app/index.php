<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
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
			body{
				background-image:url('img/restaurante.jpg')
			}
			#cont{
				background:rgb(255,255,255,0.7);
			}
			label{
            font-weight:bold !important;
        }

		</style>
</head>

<body>
	<div  class="d-flex justify-content-center align-items-center vh-100">

		<form id="cont" class="shadow w-450 p-3 rounded" action="config/logincheck.php" method="post">

			<h4 class="display-4  fs-1 text-center">INICIAR SESSIÓ</h4><br>
			<?php if (isset($_GET['error'])) : ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $_GET['error']; ?>
				</div>
			<?php endif ?>

			<div class="mb-3">
				<label class="form-label">Username</label>
				<input type="text" class="form-control" name="uname" value="">
			</div>

			<div class="mb-3">
				<label class="form-label">Password</label>
				<input type="password" class="form-control" name="pass" value="">
			</div>
			
			<div class="botones d-flex justify-content-around">
			<button type="submit" class="btn btn-primary">Login</button>
			<a href="reserva.php" class="btn btn-danger">Hacer reserva</a>
			</div>
		</form>
	</div>
</body>

</html>