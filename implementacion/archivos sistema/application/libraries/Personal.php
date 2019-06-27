<?php
class Personal{
    
    private $idPersonal;
    private $nombre;
    private $correo;
    private $rol;
    private $iPersonal;
    
    public function __construct(){
        
    }

    public function getIdPersonal(){
        return $this->idPersonal;
    }

    public function setIdPersonal($idPersonal){
        $this->idPersonal = $idPersonal;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }

    public function getRol(){
        return $this->rol;
    }

    public function setRol($rol){
        $this->rol = $rol;
    }

    public function setIPersonal($iPersonal){
        $this->iPersonal = $iPersonal;
    }

    public function getIPersonal(){
        return $this->iPersonal;
    }

    public function registrar(){
        return $this->iPersonal->registrar($this);
    }

    public function modificar(){
        return $this->iPersonal->modificar($this);
    }
    public function obtenerPersonalCorreo(){
        return $this->iPersonal->obtenerPersonalCorreo($this->correo);
    }

}