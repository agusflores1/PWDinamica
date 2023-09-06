<?php
class control_ej2 {
    public function calcularTotalHoras($datos) {
        $horasPorDia = array('lunes' => $datos['lunes_form'],
        'martes' => $datos['martes_form'],
        'miercoles' => $datos['miercoles_form'],
        'jueves' => $datos['jueves_form'],
        'viernes' => $datos['viernes_form']);
        $totalHoras = array_sum($horasPorDia);
        return $totalHoras;
    }
}
?>
