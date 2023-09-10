<?php
// ControlPersona.php
class ControlPersona {
    public function agregarPersona($datos) {
        $persona = new Persona();
        $nroDni=$datos["DNI"];
        $apellido=$datos["apellido"]; 
        $nombre=$datos["nombre"];
        $fechaNac=$datos["fechaNac"];
        $telefono=$datos["telefono"];
        $domicilio=$datos["domicilio"];
        $persona->setear($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);
        
        if ($persona->insertar()) {
            $operacion= "Persona agregada con éxito.";
        } else {
            $operacion= "Error al agregar la persona: " . $persona->getmensajeoperacion();
        }
        return $operacion;
    }
    
    public function modificarPersona($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio) {
        $persona = new Persona();
        $persona->setear($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);
        
        if ($persona->modificar()) {
            $operacion= "Persona modificada con éxito.";
        } else {
            $operacion= "Error al modificar la persona: " . $persona->getmensajeoperacion();
        }
        return $operacion;
    }
    
    public function eliminarPersona($nroDni) {
        $persona = new Persona();
        $persona->setNroDni($nroDni);
        
        if ($persona->eliminar()) {
            $operacion= "Persona eliminada con éxito.";
        } else {
            $operacion= "Error al eliminar la persona: " . $persona->getmensajeoperacion();
        }
        return $operacion;
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
