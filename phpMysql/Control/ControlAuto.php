<?php
// ControlAuto.php
class ControlAuto {
    public function agregarAuto($patente, $marca, $modelo, $nroDniDuenio) {
        $duenio = new Persona();
        $duenio->setNroDni($nroDniDuenio);
        
        $auto = new Auto();
        $auto->setear($patente, $marca, $modelo, $duenio);
        
        if ($auto->insertar()) {
            $operacion= "Auto agregado con éxito.";
        } else {
            $operacion= "Error al agregar el auto: " . $auto->getmensajeoperacion();
        } 
        return $operacion;
    }
    
    public function modificarAuto($patente, $marca, $modelo, $nroDniDuenio) {
        $duenio = new Persona();
        $duenio->setNroDni($nroDniDuenio);
        
        $auto = new Auto();
        $auto->setear($patente, $marca, $modelo, $duenio);
        
        if ($auto->modificar()) {
            $operacion= "Auto modificado con éxito.";
        } else {
            $operacion= "Error al modificar el auto: " . $auto->getmensajeoperacion();
        } return $operacion;
    }
    
    public function eliminarAuto($patente) {
        $auto = new Auto();
        $auto->setPatente($patente);
        
        if ($auto->eliminar()) {
            $operacion= "Auto eliminado con éxito.";
        } else {
            $operacion= "Error al eliminar el auto: " . $auto->getmensajeoperacion();
        }
        return $operacion;
    }
    
    public function listarAutos() {
        $auto = new Auto();
        return $auto->listar();
    }
    public function buscarAuto($datos) {
        $autos = $this->listarAutos();
        $autoIngresado = $datos["patente"];
        $autoEncontrado = [];
    
        foreach ($autos as $auto) {
            if ($autoIngresado === $auto->getPatente()) {
                $autoEncontrado = [
                    "Patente" => $auto->getPatente(),
                    "Marca" => $auto->getMarca(),
                    "Modelo" => $auto->getModelo(),
                ];
    
                $duenio = $auto->getObjDuenio();
                $autoEncontrado["Duenio"] = $duenio->getApellido() . " " . $duenio->getNombre();
    
                break; // Terminar el bucle cuando se encuentre un auto
            }
        }
    
        if (!$autoEncontrado) {
            $autoEncontrado = ["Mensaje" => "No se encontraron registros."];
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