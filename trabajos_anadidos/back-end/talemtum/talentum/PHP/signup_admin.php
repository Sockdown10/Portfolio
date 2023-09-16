<?php
include "../config/conexion.php";
include "../config/funciones.php";


if (isset($_POST['nombre']) && isset($_POST['apellidos'])) {

    $nombre = limpiar($_POST['nombre']);
    $apellidos = limpiar($_POST['apellidos']);
    $username = limpiar($_POST['username']);
    $email = limpiar($_POST['email']);
    $pass = limpiar($_POST['pass']);
    $rpass = limpiar($_POST['rpass']);
    $categoria = limpiar($_POST['categoria']);



    /*     echo "<br>" . $nombre;
        echo "<br>" . $apellidos;
        echo "<br>" . $username;
        echo "<br>" . $email;
        echo "<br>" . $pass;
        echo "<br>" . $rpass;
        echo "<br>" . $categoria; */






    $datos = "nombre=" . $nombre . "&apellidos=" . $apellidos . "&username=" . $username . "&email=" . $email . "&categoria=" . $categoria;

    if (empty($nombre)) {

        header("location:../signup_admin.php?error=No has escrito tu nombre&$datos");
    } elseif (empty($apellidos)) {

        header("location:../signup_admin.php?error=No has escrito tu apellido&$datos");
    } elseif (empty($username)) {

        header("location:../signup_admin.php?error=No has ecrito tu nombre de usuario&$datos");
    } elseif (empty($email)) {

        header("location:../signup_admin.php?error=No has escrito tu email&$datos");
    } elseif (empty($categoria)) {

        header("location:../signup_admin.php?error=No has seleccionado la categoria&$datos");
    } elseif (empty($pass)) {
        header("location:../signup_admin.php?error=No has escrito tu contraseña");

    } elseif (empty($rpass)) {
        header("location:../signup_admin.php?error=No has repetido tu contraseña");

    } elseif ($pass != $rpass) {
        header("location:../signup_admin.php?error=Las contraseñas no coinciden");

    } elseif ($pass == $rpass) {
        $passwordCifrado = cifrar($pass);
        $sql = " INSERT INTO usuarios(username,nombre,apellidos,password,rol,email) VALUES (?,?,?,?,?,?)";

        $query = $conn->prepare($sql);
        $query->execute([$username, $nombre, $apellidos, $passwordCifrado, $categoria, $email]);

        header("location:../signup_admin.php?success=Se a registrado correctamente");



    }


} else {

    header("location:../signup_admin.php?error=error en el registro ");
}



?>