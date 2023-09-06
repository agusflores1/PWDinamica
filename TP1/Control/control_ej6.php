<?php
class control_ej6{

    public function verInformacion($datos){
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        $texto = "Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." y vivo en ".$direccion;
        return $texto;
    }


    public function mayorEdad($datos){
        $edad=$datos['edad'];
        if($edad>=18)
        {$condicion='Soy mayor de edad '; }
        else
        {$condicion= 'Soy menor de edad';}
       
        return $condicion;
    }
    
    public function cantDeportes($datos) {
        $suma = 0;
    
        // Verificar cada deporte individualmente y sumar si está seleccionado
        if (isset($datos['futbol'])) {
            $suma++;
        }
        if (isset($datos['basquet'])){
            $suma++;
        }
        if (isset($datos['voley'])) {
            $suma++;
        }
        if (isset($datos['tenis'])) {
            $suma++;
        }
    
        return $suma;
    }
    
    
    
    
}
?>