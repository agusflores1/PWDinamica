<?php 
class auto {
    private $patente;
    private $marca;
    private $modelo;
    private $objDuenio;
    private $mensajeoperacion;
    
   
    public function __construct(){
        
        $this->patente="";
        $this->marca="";
        $this->modelo="";
        $this->ObjDuenio= new persona();
        $this->mensajeoperacion ="";
    }

    public function setear($patente, $marca, $modelo, $objDuenio)    {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setObjDuenio($objDuenio);
    }
    
    
    
    public function getPatente(){
        return $this->patente;
        
    }
    public function setPatente($valor){
        $this->patente = $valor;
        
    }

    public function getMarca(){
        return $this->marca;
        
    }
    public function setMarca($valor){
        $this->marca = $valor;
        
    }
    
    public function getObjDuenio(){
        return $this->objDuenio;
        
    }
    public function setObjDuenio($valor){
        $this->objDuenio = $valor;
        
    }

    public function getModelo(){
        return $this->modelo;
        
    }
    public function setModelo($valor){
        $this->modelo = $valor;
        
    }

    public function getmensajeoperacion(){
        return $this->mensajeoperacion;
        
    }
    public function setmensajeoperacion($valor){
        $this->mensajeoperacion = $valor;
        
    }
    
    
    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM auto WHERE id = ".$this->getPatente();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['Patente'], $row['Marca'],  $row['Modelo'], $row['DniDuenio']);
                    
                }
            }
        } else {
            $this->setmensajeoperacion("auto->listar: ".$base->getError());
        }
        return $resp;
    
        
    }
    
    public function insertar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio) VALUES (
            '" . $this->getPatente() . "',
            '" . $this->getMarca() . "',
            '" . $this->getModelo() . "',
            '" . $this->getObjDuenio()->getNroDni() . "');"; // Corregido
    
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
               // $this->setId($elid);
                $resp = true;
            } else {
                $this->setmensajeoperacion("Auto->insertar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->insertar: ".$base->getError());
        }
        return $resp;
    }
    
    
    public function modificar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE auto SET
        Marca = '" . $this->getMarca() . "',
        Modelo = '" . $this->getModelo() . "',
        DniDuenio = '" . $this->getObjDuenio()->getNroDni() . "'
        WHERE Patente = '" . $this->getPatente() . "'"; // Cambiado a Patente como clave primaria
    
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Auto->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->modificar: ".$base->getError());
        }
        return $resp;
    }
    
    
    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM auto WHERE Patente=".$this->getPatente();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("auto->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("auto->eliminar: ".$base->getError());
        }
        return $resp;
    }
    
    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM auto ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new auto();
                    $obj->setear($row['Patente'], $row['Marca'],  $row['Modelo'], $row['DniDuenio']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setmensajeoperacion("auto->listar: ".$base->getError());
        }
 
        return $arreglo;
    }
    
}


?>