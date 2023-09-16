<?php
session_start();
require "config/database.php";

if(isset($_SESSION['username']) && isset($_SESSION['id'])){



$db=new Database();
$con=$db->conectar();

$parking="on";
if($parking=="on")$parking=1;

$fecha_actual = date("Y-m-d");

    if($_SESSION['username']=="admin" || $_SESSION['username']=="jefe" ){
        $sql="SELECT id,nombre,apellidos,npersonas,turno,fecha,hora,parking,observaciones FROM reservas ORDER BY fecha ASC";
        $comando=$con->prepare($sql);
        $comando->execute([]);
        $resultado=$comando->fetchAll();
    }else{

        $sql = "SELECT id, nombre, apellidos, npersonas, turno, fecha, hora, parking, observaciones FROM reservas WHERE fecha>=? ORDER BY fecha ASC";
        $comando = $con->prepare($sql);
        $comando->execute([$fecha_actual]);
        $resultado = $comando->fetchAll();

    }


        

//  echo "<pre>";
//  print_r($resultado);
//  echo "/<pre>";
//  exit();

}else{
    header("Location:index.php?error=No te has entrado con tus credenciales de sesion");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTIÓN ALMACÉN</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS interno -->
    <link rel="stylesheet" href="css/estilos.css">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTIÓN ALMACÉN</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS interno -->
    <link rel="stylesheet" href="css/estilos.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <style>
    h3{
        width: fit-content !important;
        font-size:2.5em;
    }
    body{
        background:grey;
    }
    .contenedor{
        background:rgb(255,255,255,0.7) !important;
    }
  </style>
</head>
<body>
    <main class="container contenedor mt-3 pb-3">
        
        <div class="p-3 rounded">
            <div class="row mb-5">
                
                <?php if(isset($_GET['error'])): ?>
                    <h1 class="text-white text-center bg-danger p-2 rounded"><?= $_GET['error'] ?></h1>
                    
                    <?php elseif(isset($_GET['success'])): ?>
                <!-- NO SE HA PODIDO GUARDAR EL REGISTRO -->
                        <h1 class="text-white text-center bg-success p-2 rounded"><?= $_GET['success'] ?></h1>
                <?php endif; ?>
                    
            </div>
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-primary text-decoration-underline">Productos</h1>
                    <a href="reserva.php" class="btn btn-primary float-right"><i class="fa-solid fa-circle-plus"></i> Nuevo</a>
                    
                    <?php  if($_SESSION['username']=="admin") :?>
                    
                        <a href="signup.php" class="btn btn-success"><i class="fa-regular fa-user"></i>Registrar Usuario</a>
                    
                    <?php endif; ?>
                </div>
            </div>
                        
           <div class="saludo d-flex justify-content-center rounded animate__animated animate__bounceInUp">
                <h3 class="text-center text-bg-info w-50 rounded">Bienvenido <?= $_SESSION['username'] ?></h3>
            </div>

            <div class="row py-3">
                <div class="col">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <!-- Cabecera -->
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Turno</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Nº personas</th>
                                <th>Parking</th>
                                <th>Observaciones</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Listado de productos -->
                            <?php
                                $i=1;
                                foreach($resultado as $row): ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?= $row['nombre']?></td>
                                    <td><?= $row['apellidos']?></td>
                                    <td><?= $row['turno']?></td>
                                    <td><?= $row['fecha']?></td>
                                    <td><?= $row['hora']?></td>
                                    <td><?= $row['npersonas']?></td>
                                    <td><?= $row['parking'] = $row['parking']===1 ? "SI" : "NO"  ?></td>
                                    <td><?= $row['observaciones']?></td>
                                
                                
                                <?php  if($_SESSION['username']=="admin") :?>  

                                    <td><a href="editar.php?id=<?=$row['id']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
                                    
                                    <td><a onclick="return confirm('¿Estás seguro que quieres borrar este registro?')" href="delete.php?id=<?= $row['id']  ?>" class="btn btn-danger"><i class="fa-solid fa-trash" id="borrar"></i> Borrar</a></td>
                                </tr>
                                <?php endif; ?>

                                <?php 
                                $i++;
                                endforeach;?>

                        </tbody>

                
                    </table>
                </div>
            </div>
        </div>
        <div class="boton d-flex justify-content-center">
            <a href="config/logout.php" class="btn btn-danger">Cerrar Sesion</a>
        </div>
    </main>
</body>
</html>
