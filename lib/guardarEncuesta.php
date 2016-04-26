<?php

require 'conectar.php';

session_start();
$u=$_SESSION['no_control'];
$c=$_SESSION['pass'];

if($u == "" || $c == ""){
header('Location: ../index.php');
}
else {
    
$p1 = trim($_POST['p1']);
$p2 = trim($_POST['p2']);
$p3 = trim($_POST['p3']);
$p4 = trim($_POST['p4']);
$p5 = trim($_POST['p5']);
$p6 = trim($_POST['p6']);
$p7 = trim($_POST['p7']);
$p8 = trim($_POST['p8']);
$p9 = trim($_POST['p9']);
$p10 = trim($_POST['p10']);
$p11 = trim($_POST['p11']);
$p12 = trim($_POST['p12']);
$p13 = trim($_POST['p13']);
$p14 = trim($_POST['p14']);
$p15 = trim($_POST['p15']);
$p16 = trim($_POST['p16']);
$p17 = trim($_POST['p17']);
$p18 = trim($_POST['p18']);
$no_control_alumno = $u;
$id_maestro = trim($_POST['tutor']);

           $e=$mysqli->prepare("call guardarEncuesta(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
           $e->bind_param('ssssssssssssssssssss', $p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$p18,$no_control_alumno,$id_maestro);
           $e->execute();
           $e->close();
 header('location: ../pages/evaluacion.php?Guardado correctamente');
    
}
?>