<?php
require "funciones/funciones.php";
require "config/database.php";

$db=new Database();
$con=$db->conectar();

$correcto=false;

if(isset($_POST['id'])){

    $id=intval($_POST['id']);
    $nombre=limpiar($_POST['nombre']);
    $apellidos=limpiar($_POST['apellidos']);
    $turno=limpiar($_POST['turno']);
    $parking=isset($_POST['parking']) ? limpiar($_POST['parking']) : 0;
    $npersonas=limpiar($_POST['npersonas']);
    $fecha=limpiar($_POST['fecha']);
    $hora=limpiar($_POST['hora']);
    $observaciones=limpiar($_POST['observaciones']);

    //*Preparo la consulta  sql
    $sql="UPDATE reservas SET nombre=?,apellidos=?,turno=?,parking=?,npersonas=?,fecha=?,hora=?,observaciones=? WHERE id=?";
    $query=$con->prepare($sql);
    
    //*EJECUTO LA CONSULTA
    $resultado=$query->execute([$nombre,$apellidos,$turno,$parking,$npersonas,$fecha,$hora,$observaciones,$id]);
    
    if($resultado)$correcto=true;

    if($correcto){

      $msg="Registro guardado correctamente";
      header("location:index.php?success=$msg");
    }else{
      $msg="Registro no guardado correctamente";
      header("location:index.php?error=$msg");
}








}else{
    $nombre=limpiar($_POST['nombre']);
    $apellidos=limpiar($_POST['apellidos']);
    $turno=limpiar($_POST['turno']);
    $parking=isset($_POST['parking']) ? limpiar($_POST['parking']) : 0;
    $npersonas=limpiar($_POST['npersonas']);
    $fecha=limpiar($_POST['fecha']);
    $hora=limpiar($_POST['hora']);
    $observaciones=limpiar($_POST['observaciones']);


    if($npersonas=="") $npersonas=1;

    //  echo "<pre>";
    //  echo "<br>nombre: $nombre";
    //  echo "<br>apellidos: $apellidos";
    //  echo "<br>turno: $turno";
    //  echo "<br>parking: $parking";
    //  echo "<br>npersonas: $npersonas";
    //  echo "<br>fecha: $fecha";
    //  echo "<br>hora: $hora";
    //  echo "<br>observaciones: $observaciones";
    //  echo "</pre>";
    //  exit();

    $sql="INSERT INTO reservas (nombre, apellidos, turno, npersonas, fecha,hora,parking,observaciones) VALUES (?,?,?,?,?,?,?,?)";
    
    //! Preparo
    $query=$con->prepare($sql);
    //! Ejecuto
    $resultado= $query->execute([$nombre,$apellidos,$turno,$npersonas,$fecha,$hora,$parking,$observaciones]);

    if($resultado){
      $msg="Registro guardado correctamente";
      header("location:index.php?success=$msg");
    }else{
      $msg="Registro no guardado correctamente";
      header("location:index.php?error=$msg");
  }


}



?>