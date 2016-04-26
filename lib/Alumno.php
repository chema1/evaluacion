<?php

class Alumno {

    public function guardarAlumno($mysqli, $nombre, $apellido_paterno, $apellido_materno, $no_control, $carrera, $semestre, $correo, $pass, $grupo) {
       try{
           $fecha = date(DATE_RFC2822);
           $e=$mysqli->prepare("call guardarAlumno(?,?,?,?,?,?,?,?,?,?)");
           $e->bind_param('ssssssssss', $nombre, $apellido_paterno, $apellido_materno, $no_control, $fecha, $carrera, $semestre, $correo, $pass, $grupo);
           $e->execute();
           $e->close();
           return true;
        } catch(Exception $e) {
            $e->close();
           return false;
       }
 
}
    function verificarExiste($mysqli, $no_control, $correo) {
        try {
            $e=$mysqli->prepare("call existeAlumno(?,?)");
            $e->bind_param('ss',$no_control, $correo);
            $e->execute();
            $e->close();
            $e->bind_result($n);
            $e->fetch();
            if($n>0){
                return true;
            }
            else{
                $e->close();
                return false;
            }
            
        } catch(Exception $e) {
            $e->close();
            return false;
        }
    
        
    }
    
    
}

?>