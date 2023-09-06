<?php
class control_ej1 {
    public function verificarNumero($datos) {
        $numero=$datos["numero"];
        if ($numero > 0) {
            $valor= "positivo";
        } elseif ($numero < 0) {
            $valor= "negativo";
        } else {
            $valor= "cero";
        }
        return $valor;
    }
}
?>
