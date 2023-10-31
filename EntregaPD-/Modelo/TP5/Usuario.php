<?php
//include("../../Modelo/conector/BaseDatos.php");
class Usuario {
    
    private $idusuario;
    private $usnombre;
    private $uspass;
    private $usmail;
    private $usdeshabilitado;
    private $mensajeoperacion;
    
    public function __construct(){
        
        $this->idusuario="";
        $this->usnombre="";
        $this->uspass="";
        $this->usmail="";
        $this->usdeshabilitado=NULL;
        $this->mensajeoperacion="";
        
    }
    
    public function setear($idusuario, $usnombre, $uspass, $usmail, $usdeshabilitado)    {
        
        $this->setIdUsuario($idusuario);
        $this->setUsNombre($usnombre);
        $this->setUsPass($uspass);
        $this->setUsMail($usmail);
        $this->setUsDeshabilitado($usdeshabilitado);
        
    }
    
    // METODOS DE ACCESO GET
    
    public function getIdUsuario(){
        return $this->idusuario;
    }
    
    public function getUsNombre(){
        return $this->usnombre;
    }
    
    public function getUsPass(){
        return $this->uspass;
    }
    
    public function getUsMail(){
        return $this->usmail;
    }
    
    public function getUsDeshabilitado(){
        return $this->usdeshabilitado;
    }
    
    public function getmensajeoperacion(){
        return $this->mensajeoperacion;
    }
    
    
    // METODOS DE ACCESO SET
    
    public function setIdUsuario($valor){
        $this->idusuario = $valor;
    }
    
    public function setUsNombre($valor){
        $this->usnombre = $valor;
    }
    
    public function setUsPass($valor){
        $this->uspass = $valor;
    }
    
    public function setUsMail($valor){
        $this->usmail = $valor;
    }
    
    public function setUsDeshabilitado($valor){
        $this->usdeshabilitado = $valor;
    }
    
    public function setmensajeoperacion($valor){
        $this->mensajeoperacion = $valor;
    }
    
    
    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM usuario WHERE idusuario= ". $this->getIdUsuario();
        //echo $sql;
        
        if ($base->Iniciar()) {
            
            $res = $base->Ejecutar($sql);
            
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['idusuario'], $row['usnombre'], $row['uspass'], $row['usmail'], $row['usdeshabilitado']);
                    
                }
            }
        } else {
            $this->setmensajeoperacion("usuario->listar: ".$base->getError());
        }
        return $resp;
    }
    
    public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="INSERT INTO usuario (usnombre, uspass, usmail, usdeshabilitado) VALUES ('".$this->getUsNombre()."','".md5($this->getUsPass())."','".$this->getUsMail()."','".$this -> getUsDeshabilitado()."');";
        echo $sql;
        if ($base->Iniciar()) {
            
            if ($elid = $base->Ejecutar($sql)) {
                $this->setIdUsuario($elid);
                $resp = true;
            } else {
                $this->setmensajeoperacion("usuario->insertar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("usuario->insertar: ".$base->getError());
        }
        
        return $resp;
    }
    
    public function modificar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE usuario SET usnombre = '" . $this->getUsNombre() . "', uspass = '" . $this->getUsPass() . "', usmail = '" . $this->getUsMail() . "', usdeshabilitado = NULL";
        $sql .= " WHERE idusuario = " . $this->getIdUsuario();
    
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("usuario->modificar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("usuario->modificar: " . $base->getError());
        }
    
        return $resp;
    }
    
        /* 
    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM usuario WHERE idusuario='". $this->getIdUsuario()."'";
        //echo $sql;
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("usuario->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("usuario->eliminar: ".$base->getError());
        }
        return $resp;
    }*/

    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $param=date("Y-m-d H:i:s");
        $this->setUsDeshabilitado($param);
        $sql="UPDATE usuario SET usdeshabilitado='".$this->getUsDeshabilitado()."'";
        $sql.= " WHERE idusuario='".$this->getIdUsuario()."'";
        //echo $sql;
        
        if ($base->Iniciar()) {
            
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("usuario->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("usuario->modificar: ".$base->getError());
        }
        return $resp;
    }
    
 
    
    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM usuario ";
        
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                while ($row = $base->Registro()){
                    
                    $obj = new Usuario();
                    $obj->setear($row['idusuario'], $row['usnombre'], $row['uspass'], $row['usmail'], $row['usdeshabilitado']);
                    array_push($arreglo, $obj);
                }
            }
        } else {
            //     $this->setmensajeoperacion("usuario->listar: ".$base->getError());
        }
        return $arreglo;
    }
    
    
    
    
    
    
    
    
    
    
    
}