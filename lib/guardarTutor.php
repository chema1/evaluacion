<?php

require 'Tutor.php';
require 'conectar.php';

session_start();
$u=$_SESSION['no_control'];
$c=$_SESSION['pass'];

if($u == "" || $c == ""){
header('Location: ../index.php');
}
else {
$nombre = trim($_POST['nombre']);
$apellido_paterno = trim($_POST['apellido_paterno']);
$apellido_materno = trim($_POST['apellido_materno']);
$no_control = trim($_POST['no_control']);
$materia = trim($_POST['materia']);
$observacion = trim($_POST['observacion']);

$tutor = new Tutor();

if($tutor->guardarTutor($mysqli, $nombre, $apellido_paterno, $apellido_materno, $no_control, $materia, $observacion)) {
    header('location: ../pages/registrar.php?Guardado_Correctamente');
} else {
    header('location: ../pages/registrar.php?Error_al_Guardar');
}
}

?>