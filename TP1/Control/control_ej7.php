<?php
class control_ej7 {
    public function operaciones($datos) {
        $num1=$datos["num1"];
        $num2=$datos["num2"];
        $opcion=$datos["opcion"];
        if($opcion=='SUMA')
        {$total=$num1+$num2;
        $ret= $opcion .' : '. $num1 .' + '.$num2.' = '.$total; }
        elseif($opcion=='RESTA')
        {$total=0;
        $total=$num1-$num2;
        $ret= $opcion .' : '. $num1 .' - '.$num2.' = '.$total; }
        elseif($opcion=='MULTIPLICACION')
        {$total=0;
        $total=$num1*$num2;
        $ret= $opcion .' : '. $num1 .' * '.$num2.' = '.$total; }
        return $ret;
    }
}
?>
