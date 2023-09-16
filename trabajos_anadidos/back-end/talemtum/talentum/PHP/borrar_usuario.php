<?php
include "includes/header.php"  ;
//? editar_contacto.php?id=1

//Validar si recibimos la id
if(isset($_GET['id'])){
    $idUsuarios=intval($_GET['id']);
    //Obtener el contacto a editar
    $query="SELECT * FROM usuarios WHERE id= :id";
    $stmt=$conn->prepare($query);                   // Preparo
    $stmt->bindParam(":id",$idUsuarios, PDO::PARAM_INT);    // Vinculo
    $stmt->execute();                               // Ejecuto

    $usuario=$stmt->fetch(PDO::FETCH_OBJ);


}   

// Hago listado de las cursos
    $query="SELECT * FROM cursos";
    $stmt=$conn->prepare($query);
    $stmt->execute();    

    $cursos=$stmt->fetchAll(PDO::FETCH_OBJ);
    
    // Borro contacto
    if(isset($_POST['borrarUsuario'])){
    
        $query="DELETE FROM usuarios WHERE id=:id";
        //! Preparo la consulta
        $stmt=$conn->prepare($query);
        //! Vinculo valores
        $stmt->bindParam(":id",$idUsuarios,PDO::PARAM_STR);

        $resultado=$stmt->execute();

        //Hacemos una validación

        if($resultado){
            $msg="contacto borrado correctamente";
            header("Location: ../usuarios.php?sc=$msg");
        }else{
            $msg="No se ha podido borrar el contacto";
            header("Location: ../usuarios.php?er=$msg");
        }
    
}

?>

<!-- ZONA DE ERRORES -->
<?php if(isset($_GET['er'])): ?>
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?=$_GET['er']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    
    </div>
</div>
<?php endif;?>

<div class="row mb-3">
    <div class="col-sm-12">
        <h3 class="text-center text-primary">Borrar contacto</h3>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 offset-3">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Usuario</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduce el nombre" value="<?= $usuario->username?>" disabled>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduce el nombre" value="<?= $usuario->nombre?>" disabled>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Introduce el Apellido" value="<?= $usuario->apellidos?>" disabled>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Introduce el email" value="<?= $usuario->email?>" disabled> 
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Rol</label>
                <!-- <input type="text" name="categoria" id="categoria" class="form-control" placeholder="Introduce el categoria de categoria"> -->
                <select name="categoria" id="categoria" class="form-select" aria-label="Default select example" disabled>
                        <option value="alumno" <?= $usuario->rol=="alumno" ? "selected" :""?>>Alumno</option>
                        <option value="profesor" <?= $usuario->rol=="profesor" ? "selected" :""?>>Profesor</option>
                        <option value="admin" <?= $usuario->rol=="admin" ? "selected" :""?>>Administrador</option>
                
                </select>
            </div>
            <button type="submit" class="btn btn-danger w-100" name="borrarUsuario"><i class="bi bi-trash"></i> Borrar contacto</button>
        </form>
    </div>
</div>


<?php  include "includes/footer.php"  ?>