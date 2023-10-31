<?php
include_once("../../Control/TP5/AbmUsuario.php");
include_once("../../Control/TP5/AbmRol.php");
class Session{
    private $objUsuario;
    private $listaRoles;
    private $mensajeoperacion;
    
    public function __construct(){
        /*if(session_start()){
            $this->objUsuario=null;
            $this->listaRoles=[];
            $this->mensajeoperacion="";
        }*/
    }
    public function getObjUsuario()
    {
        return $this->objUsuario;
    }

    public function setObjUsuario($objUsuario)
    {
        $this->objUsuario = $objUsuario;
    }

    public function getListaRoles()
    {
        return $this->listaRoles;
    }

    public function setListaRoles($listaRoles)
    {
        $this->listaRoles = $listaRoles;
    }

    public function getMensajeoperacion()
    {
        return $this->mensajeoperacion;
    }

    public function setMensajeoperacion($mensajeoperacion)
    {
        $this->mensajeoperacion = $mensajeoperacion;
    }
    public function validar(){
        $inicia=false;
        if(isset($_SESSION['idusuario'])){
           $inicia=true;
        }
        return $inicia;
    }


    public function iniciar($usu,$pass){
        $abmUsuario=new AbmUsuario();
        $where =['usnombre'=>$usu,'uspass'=>$pass];
        $listaUsuarios=$abmUsuario->buscar($where);
        print_r($listaUsuarios);/////////
        if(count($listaUsuarios)>=1){
            if($this->activa()){
                $_SESSION['idusuario']=$listaUsuarios[0]->getIdUsuario();
                $_SESSION['nombreUsu']=$listaUsuarios[0]->getUsNombre();
            }
        }  
        return $_SESSION;
    }
    
    public function activa(){
        $activa=false;
        if(session_start()/*session_status()===PHP_SESSION_ACTIVE*/){
            $activa=true;
        }
        return $activa;
    }
    
    public function getUsuario(){
        $abmUsuario=new AbmUsuario();
        $where =['usnombre'=>$_SESSION['nombreUsu'],'idusuario'=>$_SESSION['idusuario']];
        $listaUsuarios=$abmUsuario->buscar($where);
        if($listaUsuarios>=1){
            $usuarioLog=$listaUsuarios[0];
            $this->setObjUsuario($listaUsuarios[0]);
        }
        return $usuarioLog;
    }
    
    public function getRol(){
        $abmRol=new abmRol();
        $abmUsuarioRol=new AbmUsuarioRol();
        $usuario=$this->getUsuario();
        $idUsuario=$usuario->getIdUsuario();
        $param=['idusuario'=>$idUsuario];
        $listaRolesUsu=$abmUsuarioRol->buscar($param);
        if($listaRolesUsu>1){
            $rol=$listaRolesUsu;
        }else{
            $rol=$listaRolesUsu[0];
        }
        setListaRoles($rol);
        return $rol; 
    }
    
    public function cerrar(){
        $cerrar=false;
        if(session_destroy()){
            $cerrar=true;
        }
        return $cerrar;
    }
} 
