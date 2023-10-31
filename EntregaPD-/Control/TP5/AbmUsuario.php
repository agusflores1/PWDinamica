<?php
//include("../../Modelo/TP5/Usuario.php");

class AbmUsuario {
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
    
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return object
     */
    
    public function cargarObjeto($param){
        
        //    echo "entramos a cargar objeto";
       //var_dump($param );
        $obj = null;
        
        if(array_key_exists('usnombre',$param) && array_key_exists('uspass',$param) && array_key_exists('usmail',$param)){
            
            $obj = new Usuario();
            
            $obj-> setear($param['idusuario'], $param['usnombre'], $param['uspass'], $param['usmail'], NULL);
            
            
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
        
        if( isset($param['idusuario']) ){
            $obj = new Usuario();
            $obj->setear($param['idusuario'],null, null, null, null);
            
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
        if (isset($param['idusuario']))
            
            $resp = true;
            return $resp;
    }
    
    /**
     *
     * @param array $param
     */
    public function alta($param){
        
        $resp = false;
        $elObjtUsuario = new Usuario();
        $elObjtUsuario = $this->cargarObjeto($param);
        if ($elObjtUsuario!=null and $elObjtUsuario->insertar()){
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
            
            $elObjtUsuario = $this->cargarObjetoConClave($param);
            
            if ($elObjtUsuario !=null and $elObjtUsuario->eliminar()){
                
                $resp = true;
            }
        }
        return $resp;
    }
    /** 
    
     * permite modificar un objeto
     * @param array $param
     * @return boolean
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            
            $elObjtUsuario = $this->cargarObjeto($param);
            
            if($elObjtUsuario !=null and $elObjtUsuario->modificar()){
                $resp = true;
                
            }
        }
        return $resp;
    }
    */
    /**
 * Permite modificar un usuario en la base de datos.
 * @param array $param Arreglo con los datos a actualizar.
 * @return boolean Devuelve true si la modificación fue exitosa, de lo contrario false.
 */
public function modificacion($param) {
    $resp = false;
    // Verificar que el arreglo contiene los datos necesarios
    if (isset($param['idusuario'])) {
        $idUsuario = $param['idusuario'];
        $usuarioActualizado = $this->cargarObjeto($param);
        // Verificar si se cargó correctamente el objeto
        if ($usuarioActualizado !== null) {
            if ($usuarioActualizado->modificar()) {
                $resp = true;
            }
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
            if  (isset($param['usnombre']) && isset($param['uspass']))
                $where.=" and usnombre='".$param['usnombre']."'";
                $where.=" and uspass='".$param['uspass']."'";
        }
        $elObjtUsuario = new Usuario();
        $arreglo = $elObjtUsuario->listar($where);
        return $arreglo;
    }


public function buscarID($datos){
    $usuarios = $this->buscar(null); // Cambiar $personas a $usuarios
    $idIngresado = (int)$datos["idusuario"];
    $obj = null; 

    foreach ($usuarios as $usuario) {
        if ($idIngresado === $usuario->getIdUsuario()) {
            $obj = $usuario;
           // var_dump($obj);
            break;
        }
    }
    return $obj;
}
}


?>