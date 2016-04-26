<?php

require 'conectar.php';

class Usuario {
    
    public function validarUsuario($mysqli, $usuario, $password) {
        
  $e=$mysqli->prepare("call validarUsuario(?,?)");
	$e->bind_param('ss',$usuario,$password);
	$e->execute();
	$e->bind_result($n);
	$e->fetch();
	if($n>0)
	{
		return true;
	}
	else
	{
		return false;
	}
	$e->close();
    }

    public function guardarUsuario($mysqli, $usuario, $password) {
       $e=$mysqli->prepare("call guardarUsuario(??)");
	   $e->bind_param('ss',$usuario, $password);
	   $e->execute();
	   $e->close();
    }
    
}

?>