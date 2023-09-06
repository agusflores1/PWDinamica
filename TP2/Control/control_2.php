<?php
class control_2{
    public function verificarPass($datos,$usuarios){
        $usuarioEncontrado = null;
        $usuarioIngresado= $datos["usuario"];
        $claveIngresada=$datos["clave"];
        foreach ($usuarios as $usuarioExistente) {
            if ($usuarioExistente['usuario'] === $usuarioIngresado && $usuarioExistente['clave'] === $claveIngresada) {
                $usuarioEncontrado = $usuarioExistente;
                break; } }
        if ($usuarioEncontrado) {
            $retorno= '¡Bienvenido, ' . $usuarioEncontrado['usuario'] . '!';
        } else {
            $retorno= 'Error: Usuario o contraseña incorrectos.';
        }
        return $retorno;}

public function informacion($datos){
    $return=[];
    $return["titulo"]= $datos['titulo']; 
    $return["actores"]= $datos['actores']; 
    $return["director"]= $datos['director']; 
    $return["guion"]= $datos['guion']; 
    $return["produccion"]= $datos['produccion']; 
    $return["anio"]= $datos['anio'];
    $return["nacionalidad"]= $datos['nacionalidad']; 
    $return["genero"]= $datos['genero']; 
    $return["duracion"]= $datos['duracion']; 
    $return["restricciones"]= $datos['restricciones']; 
    $return["floatingTextarea2"]= $datos['floatingTextarea2']; 

    return $return;
}

}
?>