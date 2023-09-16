<?php include "includes/header.php" ?>

<?php 
if(isset($_GET['id'])){
    $idCurso=intval($_GET['id']);
    // ir a la BD a buscar esta categoria
    $query="SELECT * FROM cursos WHERE id= :id";
    // Preparo
    $stmt=$conn->prepare($query);
    //Vincular
    $stmt->bindParam(":id",$idCurso, PDO::PARAM_INT);
    //Ejecutar
    $stmt->execute();
    //Sacar registro como objeto
    $curso=$stmt->fetch(PDO::FETCH_OBJ);

    // Si has hecho click en el botón editar categoria
    if(isset($_POST['editarCurso'])){
        //obtener nuevo valor categoria
        $nombre=limpiar($_POST['nombre']);

        if(empty($nombre)){
            $error="El nombre del curso está vacío";
            header("Location: editar_cursos?er=$error");
            exit;
        }else{
            //Hemos modificado correctamente la nueva categoria
            $query="UPDATE cursos SET nombreCurso= :nombre WHERE id= :id";

            $stmt=$conn->prepare($query);

            $stmt->bindParam(":nombre",$nombre, PDO::PARAM_STR);
            $stmt->bindParam(":id",$idCurso, PDO::PARAM_INT);

            $resultado=$stmt->execute();

            if($resultado){
                $msg="Curso modificado correctamente";
                header("Location: ../cursos.php?sc=$msg");
                exit;
            }else{
                $msg="Error! el curso no se ha podido modificar";
                header("Location: ../cursos.php?er=$msg");
                exit;
            }
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
    <div class="col-sm-6">
        <h3 class="text-center text-primary">Editar curso</h3>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 offset-3">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= isset($curso)? $curso->nombreCurso:"" ?>">
            </div>
            <button type="submit" name="editarCurso" class="btn btn-primary w-100">Editar curso</button>
        </form>
    </div>
</div>






<?php include "includes/footer.php" ?>