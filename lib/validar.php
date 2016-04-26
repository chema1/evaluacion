<?php

require 'Usuario.php';
require 'conectar.php';

session_start();
$usr = trim($_POST['usuario']);
$password = trim($_POST['pass']);
$pass = crypt(trim($_POST['pass']),'2A');

$us = new Usuario();
if($us->validarUsuario($mysqli, $usr, $password)) {
    //variables de sesion
    $_SESSION['no_control']=$usr;
    $_SESSION['pass']=$password;
    header('location: ../pages/principal.php');
}
else if($usr == 'admin' && $password == 'adminadmin') {
    //variables de sesion
    $_SESSION['no_control']=$usr;
    $_SESSION['pass']=$pass;
    header('location: ../pages/registrar.php');
}

else {
     header('location: ../index.php');
}

?>