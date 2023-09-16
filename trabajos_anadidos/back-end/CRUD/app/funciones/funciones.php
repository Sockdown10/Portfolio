<?php
function limpiar($dato){
  $dato=trim($dato);
  $dato=stripslashes($dato);
  $dato=htmlspecialchars($dato);
  return $dato;
}


function cifrar($dato){
    $passwordCifrado=password_hash($dato, PASSWORD_BCRYPT, ['cost'=>10]);
    return $passwordCifrado;
}
?>