<?php
// ControlAuto.php
class ControlAuto {

    public function agregarAuto($datos) {
    $patente = $datos["patente"];
    $marca = $datos["marca"];
    $modelo = $datos["modelo"];
    $nroDniDuenio = $datos["dniDuenio"];
    // Verifica si el dueño existe en la base de tabla persona
    $persona = new ControlPersona();
    $personas = $persona->listarPersonas();

    $personaEncontrada = null;
    foreach ($personas as $persona) {
        if ($persona->getNroDni() === $nroDniDuenio) {
            $personaEncontrada = $persona;
            break;
        }
    }

    if ($personaEncontrada !== null) {
        // El dueño existe en la base de datos, proceder a crear el registro del auto
        $auto = new Auto();
        $auto->setPatente($patente);
        $auto->setMarca($marca);
        $auto->setModelo($modelo);
        $auto->setObjDuenio($personaEncontrada);

        if ($auto->insertar()) {
            return "Auto agregado con éxito.";
        } else {
            return "Error al agregar el auto.";
        }
    } else {
        // El dueño no existe en la base de datos, mostrar un mensaje de error
        return "No se encontró un dueño con el DNI ingresado.";
    }
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
            $autoEncontrado = null;
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