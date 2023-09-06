<?php
class control_ej8 {
    public function precioEntrada($datos) {
        $edad=$datos['edad1'];
        $condicion=$datos['condicion'];
        if($edad<12 || $condicion=="si")
        {$precio=160;} 
        elseif($edad>=12 && $condicion=="si")
        {$precio=180;}
        else{$precio=300;}
        return $precio;
    }
}
?>
