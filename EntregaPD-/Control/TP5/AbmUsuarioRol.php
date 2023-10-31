<?php
class AbmUsuarioRol {
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
    
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return object
     */
    
    private function cargarObjeto($param){
        //verEstructura($param);
        $objtUsuarioRol = null;
        $objRol = null;
        $objUsuario = null;
        //print_r($param);
        if( array_key_exists('idrol',$param) and $param['idrol']!=null ){
            $objRol = new Rol();
            $objRol->setIdrol($param['idrol']);
            $objRol->cargar();
        }
        
        if( array_key_exists('idusuario',$param) && $param['idusuario']!=null){
            $objUsuario = new Usuario();
            $objUsuario->setIdUsuario($param['idusuario']);
            $objUsuario->cargar();
        }   
        
        $objUsuarioRol = new UsuarioRol();
        $objUsuarioRol->setear($objUsuario, $objRol);
           
        
        return $objUsuarioRol;
    }
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return object
     */
    private function cargarObjetoConClave($param){
        $objUsuarioRol = null;
        //print_R ($param);
        if( isset($param['idusuario']) && isset($param['idrol']) ){
            $objUsuarioRol = new UsuarioRol();
            $objUsuarioRol->setear($objUsuario, $objRol);
        }
        return $objUsuarioRol;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        
        $resp = false;
        if (isset($param['idusuario']) && isset($param['idrol']));
        
            $resp = true;
            return $resp;
            
    }
    
    /**
     *
     * @param array $param
     */
    public function alta($param){
        
        //  echo "entramos a alta";
        
        $resp = false;
        $objUsuarioRol = $this->cargarObjeto($param);
        // verEstructura($elObjtAuto);
        
        //print_r($objUsuarioRol);
        if ($objUsuarioRol!=null and $objUsuarioRol->insertar()){
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
        //verEstructura($param);
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            
            $objUsuarioRol = $this->cargarObjeto($param);
            
            if ($objUsuarioRol !=null and $objUsuarioRol->eliminar()){
                
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
        //print_R($param);
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            
            $objUsuarioRol = $this->cargarObjeto($param);
            
            if($objUsuarioRol !=null and $objUsuarioRol->modificar()){
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
        // print_R ($param);
        
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['idusuario']))
                $where.=" and idusuario='".$param['idusuario']."'";
            if  (isset($param['idrol']))
                $where.=" and idrol ='".$param['idrol']."'";
        }
            
            $arreglo = UsuarioRol::listar($where, "");
            return $arreglo;
        
    }
}
?>