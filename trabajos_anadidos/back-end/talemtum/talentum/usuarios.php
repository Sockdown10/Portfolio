<?php  include "includes/header.php"  ?>

<?php
$query="SELECT * FROM usuarios";
$stmt=$conn->query($query);

$usuarios= $stmt->fetchAll(PDO::FETCH_OBJ); // en vez de sacarlo com array asociativo lo saco como objeto




$query="SELECT * FROM cursos";
$stmt=$conn->query($query);

$cursos= $stmt->fetchAll(PDO::FETCH_OBJ); // en vez de sacarlo com array asociativo lo saco como objeto



?>
<!-- Ver registros en html con dataTables -->



<!-- listado de los usuarios  -->

<!-- Zona de mensajes -->
<?php if(isset($_GET['sc'])): ?>
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?=$_GET['sc']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    
    </div>
</div>
<?php elseif(isset($_GET['er'])): ?>
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
        <h3>Lista de Usuarios</h3>
    </div>
    <div class="col-sm-4 offset-sm-2">
        <a href="signup_admin.php" class="btn btn-success w-100"><i class="bi bi-plus-circle-fill"></i> Nuevo usuario</a><br>
    </div>
    <br><br>
</div>

<div class="row pb-5">
    <div class="col-sm-12">
        <table id="tblUsuarios" class="display" style="width:100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($usuarios as $fila):?>
                    <tr>
                        <td><?=$fila->id?></td>
                        <td><?=$fila->username?></td>
                        <td><?=$fila->nombre?></td>
                        <td><?=$fila->apellidos?></td>
                        <td><?=$fila->email?></td>
                        <td><?=$fila->rol?></td>
                        <td>
                            <a href="PHP/editar_usuario.php?id=<?=$fila->id?>&cat=<?=$fila->rol?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Editar</a>
                            <a href="PHP/borrar_usuario.php?id=<?=$fila->id?>" class="btn btn-danger"><i class="bi bi-trash"></i> Borrar</a>
                        </td>
                    </tr>
                    <?php 
                    endforeach;
                    ?>
            </tbody>
        </table>
    </div>
</div>





<?php  include "includes/footer.php"  ?>
<script>
    var table = new DataTable('#tblUsuarios', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/ca.json',
    },
});

</script>