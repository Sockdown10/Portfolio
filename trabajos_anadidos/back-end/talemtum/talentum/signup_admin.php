<?php include "includes/header.php" ?>


<div class="container h-100 d-flex justify-content-center align-items-center flex-column  mt-5" >
  <h2 class="text-black mt-5" >Registrar usuarios</h2>
<form class="row g-3 mt-5 p-5 shadow p-3 mb-5 bg-body-tertiary rounded"action="PHP/signup_admin.php" method="post">
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
  <div class="col-md-4">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre"name="nombre" value="<?php echo isset($_GET['nombre']) ? $_GET['nombre'] : "" ?>">
  </div>
  <div class="col-md-4">
    <label for="apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo isset($_GET['apellidos']) ? $_GET['apellidos'] : "" ?>">
  </div>
  <div class="col-md-4">
    <label for="username" class="form-label">Usuario</label>
  
    <input type="text" class="form-control" id="username" name="username" value="<?php echo isset($_GET['username']) ? $_GET['username'] : "" ?>">
    </div>
    <div class="col-md-4 mt-1">
    <label for="email" class="form-label">Correo</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
  </div>

   

<div class="col-md-4 ">
  <label for="pass">Contraseña</label>
  <input type="password" class="form-control" id="pass" name="pass">
  </div>
  <div class="col-md-4">
  <label for="rpass">Repetir contraseña</label>

  <input type="password" class="form-control" id="rpass" name="rpass">
  </div>

  <div class="col-md-4 offset-8">
  <label for="categoria" class="form-label">Categoria</label>
            
            <select name="categoria" id="categoria" class="form-select"
                aria-label="Default select example">
                <option value=""> -- Selecciona una categoria -- </option>
                <option value="profesor">Profesor</option>
                <option value="alumno">Alumno</option>
                <option value="admin">Administrador</option>

            </select>
  </div>
  
 
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar</button>
    <a href="usuarios.php" class="btn btn-secondary">Volver</a>
  </div>
</form>
</div>
































<?php  include "includes/footer.php"  ?>