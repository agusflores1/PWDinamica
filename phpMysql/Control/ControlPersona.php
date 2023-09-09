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
    public function buscarPersona($datos){
        $personas = $this->listarPersonas();
        $dniIngresado = $datos["DNI"];
        $dniEncontrado = ""; 
    
        foreach ($personas as $persona) {
            if ($dniIngresado === $persona->getNroDni()) {
                $dniEncontrado.=
                "Nombre: " . $persona->getNombre() . "<br>"
                . "Apellido: " . $persona->getApellido() . "<br>"
                . "DNI: " . $persona->getNroDni() . "<br>"
                . "Fecha Nacimiento: " . $persona->getFechaNac() . "<br>"
                . "Telefono: " . $persona->getTelefono() . "<br>"
                . "Domicilio: " . $persona->getDomicilio() . "<br>".
                "------------------------------------------<br>";
            }
      

        }
    
        if ($dniEncontrado === "") {
            $dniEncontrado = "";
        }
    
        return $dniEncontrado;
    }
}

?>
