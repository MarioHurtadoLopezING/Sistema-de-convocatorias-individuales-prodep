<?php
class Usuario{

    private $idUsuario;
    private $nombreUsuario;
    private $contrasena;
    private $personal;
    private $iUsuario;
    
    public function __construct(){
        
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }
    
    public function getNombre(){
        return $this->nombreUsuario;
    }

    public function setNombre($nombreUsuario){
        $this->nombreUsuario = $nombreUsuario;
    }
    
    public function getContrasena(){
        return $this->contrasena;
    }

    public function setContrasena($contrasena){
        $this->contrasena = $contrasena;
    }

    public function setPersonal($personal){
        $this->personal = $personal;
    }

    public function getPersonal(){
        return $this->personal;
    }

    public function getIUsuario(){
        return $this->iUsuario;
    }

    public function setIUsuario($iUsuario){
        $this->iUsuario = $iUsuario;
    }

    public function registrar(){
        return $this->iUsuario->registrarUsuario($this);
    }

    public function modificar(){
        return $this->iUsuario->modificar($this);
    }

    public function iniciarSesion($nombreUsuario,$contrasena){
        return $this->iUsuario->iniciarSesion($nombreUsuario,$contrasena);
    }
}