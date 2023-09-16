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
    if(isset($_POST['borrarCurso'])){
        $sql="DELETE FROM cursos WHERE id=:id ";

        //Preparo consulta
        $query=$conn->prepare($sql);
        //Ejecuto consulta
        $query->bindParam(":id",$idCurso, PDO::PARAM_INT);
        $resultado= $query->execute();

        if($resultado){
            $msg="Curso borrado correctamente";
            header("Location:../cursos.php?sc=$msg");
            exit();
        }else{
            $msg="El curso no se ha podido borrar";
            header("Location:../cursos.php?er=$msg");
            exit();
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
        <h3 class="text-center text-primary">Borrar curso</h3>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 offset-3">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= isset($curso)? $curso->nombreCurso:"" ?>" disabled>
            </div>
            <button type="submit" name="borrarCurso" class="btn btn-danger w-100"><i class="bi bi-trash"></i> Borrar curso</button>
        </form>
    </div>
</div>






<?php include "includes/footer.php" ?>