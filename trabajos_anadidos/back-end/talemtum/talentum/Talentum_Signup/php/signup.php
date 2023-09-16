<?php
include "../../config/conexion.php";
include "../../config/funciones.php";


if (isset($_POST['nombre']) && isset($_POST['apellidos'])) {

    $nombre = limpiar($_POST['nombre']);
    $apellidos = limpiar($_POST['apellidos']);
    $username = limpiar($_POST['username']);
    $email = limpiar($_POST['email']);
    $pass = limpiar($_POST['pass']);
    $rpass = limpiar($_POST['rpass']);


    /* echo "<br>" . $nombre;
    echo "<br>" . $apellidos;
    echo "<br>" . $username;
    echo "<br>" . $email;
    echo "<br>" . $pass;
    echo "<br>" . $rpass;
 */




    $datos = "nombre=" . $nombre . "&apellidos=" . $apellidos . "&username=" . $username . "&email=" . $email;

    if (empty($nombre)) {

        header("location:../signup.php?error=No has escrito tu nombre&$datos");
    } elseif (empty($apellidos)) {

        header("location:../signup.php?error=No has escrito tu apellido&$datos");
    } elseif (empty($username)) {

        header("location:../signup.php?error=No has ecrito tu nombre de usuario&$datos");
    } elseif (empty($email)) {

        header("location:../signup.php?error=No has escrito tu email&$datos");
    } elseif (empty($pass)) {
        header("location:../signup.php?error=No has escrito tu contraseña");

    } elseif (empty($rpass)) {
        header("location:../signup.php?error=No has repetido tu contraseña");

    } elseif ($pass != $rpass) {
        header("location:../signup.php?error=Las contraseñas no coinciden");

    } elseif ($pass == $rpass) {
        $passwordCifrado = cifrar($pass);
        $sql = " INSERT INTO usuarios(username,nombre,apellidos,password,email) VALUES (?,?,?,?,?)";

        $query = $conn->prepare($sql);
        $query->execute([$username, $nombre, $apellidos, $passwordCifrado, $email]);

        header("location:../signup.php?success=Se a registrado correctamente");



    }


} else {

    header("location:../signup.php?error=error en el registro ");
}



?>