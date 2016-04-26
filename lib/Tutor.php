<?php

class Tutor {

    

    public function guardarTutor($mysqli, $nombre, $apellido_paterno, $apellido_materno, $no_control, $materia, $observacion) {
       try{
           $e=$mysqli->prepare("call guardarTutor(?,?,?,?,?,?)");
           $e->bind_param('ssssss', $nombre, $apellido_paterno, $apellido_materno, $no_control, $materia, $observacion);
           $e->execute();
           $e->close();
           return true;
        } catch(Exception $e) {
            $e->close();
           return false;
       }
 
}
}

?>