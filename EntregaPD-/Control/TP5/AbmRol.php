<?php
class AbmRol{
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return object
     */
    private function cargarObjeto($param){
        $obj = null;
        
        if( array_key_exists('idrol',$param) and array_key_exists('rodescripcion',$param)){
            $obj = new Rol();
            $obj->setear($param['idrol'], $param['rodescripcion']);
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return object
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['idrol']) ){
            $obj = new Rol();
            $obj->setear($param['idrol'], null);
        }
        return $obj;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['idrol']))
            $resp = true;
            return $resp;
    }
    
    /**
     *
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        $param['idrol'] =null;
        $elObjtRol = $this->cargarObjeto($param);
        //        verEstructura($elObjtTabla);
        if ($elObjtRol!=null and $elObjtRol->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    /**
     * permite eliminar un objeto
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtRol = $this->cargarObjetoConClave($param);
            if ($elObjtRol!=null and $elObjtRol->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtRol = $this->cargarObjeto($param);
            if($elObjtRol!=null and $elObjtRol->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['idrol']))
                $where.=" and idrol =".$param['idrol'];
                if  (isset($param['rodescripcion']))
                    $where.=" and rodescripcion ='".$param['rodescripcion']."'";
        }
        $arreglo = Rol::listar($where);
        return $arreglo;
        
        
        
        
    }
    
}
?>
