<?php
session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
  require "../../config/conexion.php";
  require "../../config/funciones.php";
  
  

  $email=limpiar($_POST['email']);
  $password=limpiar($_POST['password']);


  $data="email= ".$email;

  if (empty($email)) {
      $em = "Debes poner tu email";
      header("Location: ../index.php?error=$em&$data");
      exit;
   } elseif (empty($password)) {
      $em = "Debes poner la contraseña";
      header("Location: ../index.php?error=$em&$data");
      exit;
  }else{
      $sql = "SELECT * FROM usuarios WHERE email = ?";
      $stmt = $conn->prepare($sql); //Preparo consulta
      $stmt->execute([$email]);     //Executo consulta 

      //Miro a veure si existeix un usuari que es digui igual

      if ($stmt->rowCount() == 1) {
         $user = $stmt->fetch(); //em retorna tot el registre

         $id =  $user['id'];
         $emailBase =  $user['email'];
         $passwordCifrado =  $user['password'];
         $rol = $user['rol'];

        // echo "<pre>";
        // print_r($user);
        // echo "</pre>";
        // exit();

        


         if ($emailBase === $email) {
            if (password_verify($password,$passwordCifrado)) {
               $_SESSION['id'] = $id;
               $_SESSION['email'] = $email;
               $_SESSION['rol']=$rol;
               
               

                // echo $_SESSION['id']."      ".$_SESSION['email']."         ".$_SESSION['rol'];
                //  exit();
              
                if($_SESSION['rol']==="admin"){
                  header("Location: ../../usuarios.php");
                  exit();
                
                }elseif($_SESSION['rol']==="profesor" || $_SESSION['rol']==="alumno"){
                  header("Location: ../../alumno.php");
                  exit();
                }



               
               header("Location: ../index.php?error=Estás intentano acceder sin iniciar sesión");

               exit;
            } else {
               //No coincideixen contrasenyes
               $em = "Nombre de usuario i/o contraseña inconrrectos";
               header("Location: ../index.php?error=$em&$data");
               exit;
            }
         } else {
            //No coincideix el nom d´usuari del formulari amb el de la BD
            $em = "Nombre de usuario i/o contraseña inconrrectos";
            header("Location: ../index.php?error=$em&$data");
            exit;
         }
      } else {
         //No hi ha aquest usuari a la BD
         $em = "Nombre de usuario i/o contraseña inconrrectos";
         header("Location: ../index.php?error=$em&$data");
         exit;
      }
  }
}else{
header("Location: ../index.php?error=error");
   exit;
}
?>