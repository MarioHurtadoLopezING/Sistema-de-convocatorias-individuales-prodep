<?php
abstract class PersonalAdministrativo{

    private $idPersonal;
    private $nombre;
    private $correo;
    
    public function __construct(){
        
    }

    public function setIdPersonal($idPersonal){
        $this->idPersonal = $idPersonal;
    }

    public function getIdPersonal(){
        return $this->idPersonal;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public abstract function registrarPersonal();
    public abstract function editarPersonal();
    public abstract function obtenerPersonal($idPersonal);
}