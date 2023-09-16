<?php

session_start();
require "database.php";
include "../funciones/funciones.php";
$db= new Database();
$con=$db->conectar();

if(isset($_POST['uname']) && isset($_POST['pass']) && isset($_POST['re_pass']) ){
  

    $user=limpiar($_POST['uname']);
    $contrasena=limpiar($_POST['pass']);  
    $re_contrasena=limpiar($_POST['re_pass']); 

    $user_data='user='.$user;

    
    if (empty($user)) {
        header("Location: ../signup.php?error=Falta el nombre de usuario&$user_data");
        exit();
    }
    elseif (empty($contrasena)) {
        header("Location: ../signup.php?error=Falta la contraseña&$user_data");
        exit();
    }
    elseif(empty($re_contrasena)){
        header("Location: ../signup.php?error=Falta repetir la contraseña&$user_data");
        exit();
    }
    elseif ($contrasena !== $re_contrasena) {
        header("Location: ../signup.php?error=Las contraseñas no coinciden&$user_data");
        exit();
    }else{
      
        // Mirar si el usuario ya exista
        //! 1.- PREPARO LA CONSULTA
        $sql="SELECT * FROM trabajadores WHERE username= ? ";
        $stmt=$con->prepare($sql);
       
         //! 2.- EJECUTO CONSULTA
        $stmt->execute([$user]);
        // comprobamos si ya existe el usuario
        if($stmt->rowCount()>0){
            $em="Este usuario ya existe";
            header("Location: ../signup.php?error=$em");
            exit();
            
        }else{
            // Ciframos la contraseña
            $passCifrado=cifrar($contrasena);
            //! 1.- PREPARO CONSULTA
            $sql="INSERT INTO trabajadores (username,password) VALUES (?,?)";
            $stmt=$con->prepare($sql);
            //! 2.- EJECUTO LA CONSULTA
            $stmt->execute([$user,$passCifrado]);
            //! 3.- CERRAMOS LA CONEXIÓN
            $stmt=null;
            $em="Te has registrado correctamente";
            header("Location: ../index.php?success=$em");
        }
        
    }

}
else{
    // estás intentando acceder a esta pág. directamente
    header("Location:../signup.php");
}


?>