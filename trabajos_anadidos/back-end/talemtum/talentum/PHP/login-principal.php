<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
  require "../config/conexion.php";
  require "../config/funciones.php";
  
  

  $username=limpiar($_POST['username']);
  $password=limpiar($_POST['password']);


  $data="username= ".$username;

  if (empty($username)) {
      $em = "Posa el teu nom de usuari";
      header("Location: ../../index.php?error=$em&$data");
      exit;
   } elseif (empty($password)) {
      $em = "Posa la teva contrasenya";
      header("Location: ../../index.php?error=$em&$data");
      exit;
  }else{
      $sql = "SELECT * FROM usuarios WHERE username = ?";
      $stmt = $conn->prepare($sql); //Preparo consulta
      $stmt->execute([$username]);     //Executo consulta 

      //Miro a veure si existeix un usuari que es digui igual

      if ($stmt->rowCount() == 1) {
         $user = $stmt->fetch(); //em retorna tot el registre

         $id =  $user['id'];
         $usernameBase =  $user['username'];
         $passwordCifrado =  $user['password'];
         $rol = $user['rol'];

        // echo "<pre>";
        // print_r($user);
        // echo "</pre>";
        // exit();

        


         if ($usernameBase === $username) {
            if (password_verify($password,$passwordCifrado)) {
               $_SESSION['id'] = $id;
               $_SESSION['email'] = $email;
               $_SESSION['username'] = $username;
               $_SESSION['rol']=$rol;
               
               

              
                if($_SESSION['rol']==="admin"){
                  header("Location: ../usuarios.php");
                  exit();
                
                }elseif($_SESSION['rol']==="profesor" || $_SESSION['rol']==="alumno"){
                  header("Location: ../alumno.php");
                  exit();
                }



               
               header("Location: ../../index.php?error=Error, tens de iniciar sessió");

               exit;
            } else {
               //No coincideixen contrasenyes
               $em = "Nom de usuari i/o contrasenya incorrectes";
               header("Location: ../../index.php?error=$em&$data");
               exit;
            }
         } else {
            //No coincideix el nom d´usuari del formulari amb el de la BD
            $em = "Nom de usuari i/o contrasenya incorrectes";
            header("Location: ../../index.php?error=$em&$data");
            exit;
         }
      } else {
         //No hi ha aquest usuari a la BD
         $em = "Nom de usuari i/o contrasenya incorrectes";
         header("Location: ../../index.php?error=$em&$data");
         exit;
      }
  }
}else{
header("Location: ../../index.php?error=error");
exit;
}
?>