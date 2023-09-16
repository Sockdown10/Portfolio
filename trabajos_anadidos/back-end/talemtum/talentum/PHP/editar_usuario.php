<?php
include "includes/header.php"  ;
//? editar_usuario.php?id=1

//Validar si recibimos la id
if(isset($_GET['id'])){
    $idUsuario=intval($_GET['id']);
    //Obtener el contacto a editar
    $query="SELECT * FROM usuarios WHERE id= :id";
    $stmt=$conn->prepare($query);                   // Preparo
    $stmt->bindParam(":id",$idUsuario, PDO::PARAM_INT);    // Vinculo
    $stmt->execute();                               // Ejecuto

    $usuario=$stmt->fetch(PDO::FETCH_OBJ);


}   

    // PRoceso formulario
    if(isset($_POST['editarContacto'])){
    //* Recogemos valores
    $nombre=limpiar($_POST['nombre']);
    $apellido=limpiar($_POST['apellido']);
    $email=limpiar($_POST['email']);
    $fila=limpiar($_POST['categoria']);


    //Validar si el campo está vacio
    if(empty($nombre)){
        $error="No has introducido el nombre";
        header("Location: editar_usuario.php?er=$error&id=$idUsuario");
        exit;
    }
    elseif(empty($apellido)){
        $error="No has introducido el apellido";
        header("Location: editar_usuario.php?er=$error&id=$idUsuario");
        exit;
    }
    elseif(empty($email)){
        $error="No has introducido el email";
        header("Location: editar_usuario.php?er=$error&id=$idUsuario");
        exit;
    }
    else{
        $fechaActual=date("Y-m-d");
        $query="UPDATE usuarios SET nombre=:nombre,apellidos=:apellidos,email=:email, rol=:rol WHERE id=:id";
        //! Preparo la consulta
        $stmt=$conn->prepare($query);
        //! Vinculo valores
        $stmt->bindParam(":nombre",$nombre,PDO::PARAM_STR);
        $stmt->bindParam(":apellidos",$apellido,PDO::PARAM_STR);
        $stmt->bindParam(":email",$email,PDO::PARAM_STR);
        $stmt->bindParam(":rol",$fila,PDO::PARAM_STR);
        $stmt->bindParam(":id",$idUsuario,PDO::PARAM_STR);

        $resultado=$stmt->execute();

        //Hacemos una validación

        if($resultado){
            $msg="contacto editado correctamente";
            header("Location: ../usuarios.php?sc=$msg");
        }else{
            $msg="No se ha podido editar el contacto";
            header("Location: ../usuarios.php?er=$msg");
        }
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
        <h3 class="text-center text-primary">Editar contacto</h3>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 offset-3">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduce el nombre" value="<?= $usuario->nombre?>">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Introduce el Apellido" value="<?= $usuario->apellidos?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Introduce el email" value="<?= $usuario->email?>"> 
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Rol</label>
                <!-- <input type="text" name="categoria" id="categoria" class="form-control" placeholder="Introduce el categoria de categoria"> -->
                <select name="categoria" id="categoria" class="form-select" aria-label="Default select example">
                        <option value="alumno" <?= $usuario->rol=="alumno" ? "selected" :""?>>Alumno</option>
                        <option value="profesor" <?= $usuario->rol=="profesor" ? "selected" :""?>>Profesor</option>
                        <option value="admin" <?= $usuario->rol=="admin" ? "selected" :""?>>Administrador</option>
                
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="editarContacto"><i class="bi bi-person-bounding-box"></i> Editar contacto</button>
        </form>
    </div>
</div>


<?php  include "includes/footer.php"  ?>