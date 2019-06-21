<?php
class Usuario{

    private $idUsuario;
    private $nombreUsuario;
    private $contrasena;
    private $personal;
    
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

    public function registrarUsuario(){

    }

    public function modificar(){

    }

    public function iniciarSesion(){

    }
}