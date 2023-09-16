<?php
require "config/database.php";

$db=new Database();
$con=$db->conectar();

$id=intval($_GET['id']);

$sql="DELETE FROM reservas WHERE id=?";

$query=$con->prepare($sql);

$resultado=$query->execute([$id]);

if($resultado){
  $msg="Registro borrado correctamente";
  header("location:index.php?success=$msg");
}else{
  $msg="Registro no borrado correctamente";
  header("location:index.php?error=$msg");
}


?>