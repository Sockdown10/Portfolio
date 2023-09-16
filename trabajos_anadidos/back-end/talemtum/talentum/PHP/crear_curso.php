<?php  include "includes/header.php"  ;
// Insertamos una nueva curso

if(isset($_POST['crearCurso'])){
    $nombre=limpiar($_POST['nombre']);
    //Validar si el campo está vacio
    if(empty($nombre)){
        $error="No has introducido el nombre del curso";
        header("Location: crear_curso.php?er=$error");
    }else{
        $fechaActual=date("Y-m-d");
        $query="INSERT INTO cursos(nombreCurso) VALUES (:nombre)";
        //! Preparo la consulta
        $stmt=$conn->prepare($query);
        //! Vinculo 
        $stmt->bindParam(":nombre",$nombre,PDO::PARAM_STR);

        $resultado=$stmt->execute();

        //Hacemos una validación

        if($resultado){
            $msg="curso creado correctamente";
            header("Location: ../cursos.php?sc=$msg");
        }else{
            $msg="No se ha podido crear el curso";
            header("Location: ../cursos.php?er=$msg");
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

<div class="row">
    <div class="col-sm-12">
        <h3 class="text-center text-primary">Cear nuevo curso</h3>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 offset-3">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduce el nombre del curso">
            </div>
            <button type="submit" class="btn btn-primary w-100" name="crearCurso">Crear nuevo curso</button>
        </form>
    </div>
</div>



<?php  include "includes/footer.php"  ?>