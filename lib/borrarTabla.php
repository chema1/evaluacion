<?php
session_start();
$u=$_SESSION['no_control'];
$c=$_SESSION['pass'];

if($u == "" || $c == ""){
header('Location: ../index.php');
}
else {
    $tabla = trim($_POST['tabla']);
    
    mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
    mysql_select_db('evaluacion')or die ('Error al seleccionar la Base de Datos: '.mysql_error()); 
    $result4 = mysql_query("truncate table ".$tabla." ");
    $row4 = mysql_fetch_array($result4,MYSQL_NUM);
    
 header('location: ../pages/resultados.php?Borrado_correctamente');

    
}
?>
