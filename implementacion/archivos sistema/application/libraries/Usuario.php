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
    
    public function getNombreUsuario(){
        return $this->nombreUsuario;
    }

    public function setNombreUsuario($nombreUsuario){
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
        $this->iUsuario = $iUduario;
    }

    public function registrarUsuario(){
        return $this->iUsuario->registrar($this);
    }

    public function modificar(){
        return $this->iUsuario->modificar($this);
    }

    public function iniciarSesion($usuario,$contrasena){
        return $this->iUsuario->iniciarSesion($usuario,$contrasena);
    }
}