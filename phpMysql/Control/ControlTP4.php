<?php
// ControlPersona.php
class ControlPersona {
    public function agregarPersona($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio) {
        $persona = new Persona();
        $persona->setear($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);
        
        if ($persona->insertar()) {
            return "Persona agregada con éxito.";
        } else {
            return "Error al agregar la persona: " . $persona->getmensajeoperacion();
        }
    }
    
    public function modificarPersona($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio) {
        $persona = new Persona();
        $persona->setear($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);
        
        if ($persona->modificar()) {
            return "Persona modificada con éxito.";
        } else {
            return "Error al modificar la persona: " . $persona->getmensajeoperacion();
        }
    }
    
    public function eliminarPersona($nroDni) {
        $persona = new Persona();
        $persona->setNroDni($nroDni);
        
        if ($persona->eliminar()) {
            return "Persona eliminada con éxito.";
        } else {
            return "Error al eliminar la persona: " . $persona->getmensajeoperacion();
        }
    }
    
    public function listarPersonas() {
        $persona = new Persona();
        return $persona->listar();
    }
}

// ControlAuto.php
class ControlAuto {
    public function agregarAuto($patente, $marca, $modelo, $nroDniDuenio) {
        $duenio = new Persona();
        $duenio->setNroDni($nroDniDuenio);
        
        $auto = new Auto();
        $auto->setear($patente, $marca, $modelo, $duenio);
        
        if ($auto->insertar()) {
            return "Auto agregado con éxito.";
        } else {
            return "Error al agregar el auto: " . $auto->getmensajeoperacion();
        }
    }
    
    public function modificarAuto($patente, $marca, $modelo, $nroDniDuenio) {
        $duenio = new Persona();
        $duenio->setNroDni($nroDniDuenio);
        
        $auto = new Auto();
        $auto->setear($patente, $marca, $modelo, $duenio);
        
        if ($auto->modificar()) {
            return "Auto modificado con éxito.";
        } else {
            return "Error al modificar el auto: " . $auto->getmensajeoperacion();
        }
    }
    
    public function eliminarAuto($patente) {
        $auto = new Auto();
        $auto->setPatente($patente);
        
        if ($auto->eliminar()) {
            return "Auto eliminado con éxito.";
        } else {
            return "Error al eliminar el auto: " . $auto->getmensajeoperacion();
        }
    }
    
    public function listarAutos() {
        $auto = new Auto();
        return $auto->listar();
    }
}
?>
