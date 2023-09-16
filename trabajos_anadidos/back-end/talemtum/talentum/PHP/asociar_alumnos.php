
<?php
include "../config/conexion.php";

if(isset($_POST['idAlumno']) && isset($_POST['cursos'])){


$idAlumno=$_POST['idAlumno'];
$idCursos=$_POST['cursos'];

/* echo "<br>".$idAlumno;
echo "<br>".$idCursos; */

if(empty($idAlumno)){
    header("location:../inscribir.php?er= No has intruducido la id del alumno");
}
elseif(empty($idCursos)){

    header("location:../inscribir.php?er= No has intruducido el cuso que se ha inscrito el alumno");

}
else{

$sql="SELECT * FROM usuarios WHERE id = $idAlumno";
$query = $conn->prepare($sql);
$query->execute();
$infoAlumno=$query->fetch(PDO::FETCH_OBJ);

/* echo "<pre>";
print_r($infoAlumno);
echo "</pre>";
 */

$nombreAlumno=$infoAlumno->nombre;
$apellidosAlumno=$infoAlumno->apellidos;
$fechaAlta=date('Y-m-d');
$sql="INSERT INTO alum_cursos (idAlumno,nombre,apellidos,idCategoria,fecha_alta) VALUES (?,?,?,?,?)";

$query=$conn->prepare($sql);

$resultado=$query->execute([$idAlumno,$nombreAlumno,$apellidosAlumno,$idCursos,$fechaAlta]);


if($resultado){

    header("location:../inscribir.php?sc= El cuso del alumno se ha introducido correctamente");
}
else{
    header("location:../inscribir.php?er= hay algun");
}



}





}






?>