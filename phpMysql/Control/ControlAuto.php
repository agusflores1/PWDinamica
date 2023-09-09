<?php
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
    public function buscarAuto($datos){
        $autos = $this->listarAutos();
        $autoIngresado = $datos["patente"];
        $autoEncontrado = ""; 
    
        foreach ($autos as $auto) {
            if ($autoIngresado === $auto->getPatente()) {
                $autoEncontrado = "Patente: " . $auto->getPatente() . "<br>"
                . "Marca: " . $auto->getMarca() . "<br>"
                . "Modelo: " . $auto->getModelo() . "<br>";
                
                $duenio = $auto->getObjDuenio();
                $autoEncontrado .= "Dueño: " . $duenio->getApellido() . " " . $duenio->getNombre() . "<br>";
            
                break; // Terminar el bucle cuando se encuentre un auto
            }
        }
    
        if ($autoEncontrado === "") {
            $autoEncontrado = "No se encontraron registros.";
        }
    
        return $autoEncontrado;
    }

    public function buscarDuenio($datos){
        $autos = $this->listarAutos();
        $dniIngresado = $datos["DNI"];
        $dniEncontrado = ""; 
    
        foreach ($autos as $auto) {
            if ($dniIngresado === $auto->getObjDuenio()->getNroDni()) {
                $dniEncontrado.=
                "Patente: " . $auto->getPatente() . "<br>"
                . "Marca: " . $auto->getMarca() . "<br>"
                . "Modelo: " . $auto->getModelo() . "<br>".
                "------------------------------------------<br>";
            }
      

        }
    
        if ($dniEncontrado === "") {
            $dniEncontrado = "No se encontraron registros de autos.";
        }
    
        return $dniEncontrado;
    }
    
}?>