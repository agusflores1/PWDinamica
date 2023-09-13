<?php
// ControlPersona.php
class ControlPersona {
    public function agregarPersona($datos) {
        $existe=$this->buscarPersona($datos);
        if(!$existe)
        {  $persona = new Persona();
            $nroDni=$datos["DNI"];
            $apellido=$datos["apellido"]; 
            $nombre=$datos["nombre"];
            $fechaNac=$datos["fechaNac"];
            $telefono=$datos["telefono"];
            $domicilio=$datos["domicilio"];
            $persona->setear($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);
            if ($persona->insertar()) {
                $operacion= true;
            } else {
                $operacion= false;
            }
            return $operacion;
        }}
        
    
    public function modificarPersona($datos) {
        $persona = new Persona();
        $nroDni=$datos["nroDni"]; 
        $apellido=$datos["apellido"]; 
        $nombre=$datos["nombre"];
        $fechaNac=$datos["fechaNac"];
        $telefono=$datos["telefono"];
        $domicilio=$datos["domicilio"];
        $persona->setear($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);
        //var_dump($nroDni);
        if ($persona->modificar()) {
            $operacion= "Persona modificada con éxito.";
        } else {
            $operacion= "No ha cambiado ningun dato.";
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
        $objPersona = null; 
    
        foreach ($personas as $persona) {
            if ($dniIngresado === $persona->getNroDni()) {
                $objPersona=$persona;
                break;
            }
        }
        return $objPersona;
    }
}

?>
