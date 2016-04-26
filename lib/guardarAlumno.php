<?php

require 'Alumno.php';
require 'conectar.php';

$nombre = trim($_POST['nombre']);
$apellido_paterno = trim($_POST['apellido_paterno']);
$apellido_materno = trim($_POST['apellido_materno']);
$no_control = trim($_POST['numero_control']);
$carrera = trim($_POST['carrera']);
$semestre = trim($_POST['semestre']);
$correo = trim($_POST['correo']);
$pass = crypt(trim($_POST['pass']),'2A');
$grupo = trim($_POST['grupo']);

$alumno = new Alumno();

//if($alumno->verificarExiste($no_control, $correo)) {
    if($alumno->guardarAlumno($mysqli, $nombre, $apellido_paterno, $apellido_materno, $no_control, $carrera, $semestre, $correo, $pass, $grupo)) {
        header('location: ../index.php?Guardado_Correctamente');
    } 
    else {
        header('location: ../index.php?Error_al_guardar');
    }
//}
//else {
//         header('location: ../index.php?Numero_de_control_y/o_mail_ya_existe');
//   }



?>