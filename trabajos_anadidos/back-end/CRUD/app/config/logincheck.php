<?php
session_start();

if(isset($_POST['uname']) && isset($_POST['pass'])){
  require "database.php";
  require "../funciones/funciones.php";
  
  $db= new Database();
  $con=$db->conectar();

  $uname=limpiar($_POST['uname']);
  $pass=limpiar($_POST['pass']);

//    echo $uname ; 
//   echo "<br>".$pass;
//   exit();
  

  $data="uname= ".$uname;

  if (empty($uname)) {
      $em = "Debes poner nombre de usuario";
      header("Location: index.php?error=$em&$data");
      exit;
   } elseif (empty($pass)) {
      $em = "Debes poner la contraseña";
      header("Location: index.php?error=$em&$data");
      exit;
  }else{
      $sql = "SELECT * FROM trabajadores WHERE username = ?";
      $stmt = $con->prepare($sql); //Preparo consulta
      $stmt->execute([$uname]);     //Executo consulta 

      //Miro a veure si existeix un usuari que es digui igual

      if ($stmt->rowCount() == 1) {
         $user = $stmt->fetch(); //em retorna tot el registre

         $id =  $user['id'];
         $username =  $user['username'];
         $password =  $user['password'];


         // //!Datos recogidos 
         // echo "<pre>";
         // echo $username ." ---   ".$uname;
         // echo "<br>" .$pass ."   ----   " .$password;
         // exit();


         if ($username === $uname) {
            if (password_verify($pass,$password)) {
               $_SESSION['id'] = $id;
               $_SESSION['username'] = $username;
               

               //  echo $_SESSION['id']."      ".$_SESSION['username'];
               //  exit();


               header("Location: ../index_admin.php");
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