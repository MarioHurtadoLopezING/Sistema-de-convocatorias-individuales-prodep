<?php
class Administrador extends PersonalAdministrador{

	private $iAdministrador;

    public function __construct(){
        
    }

    public function setIAdministrador($iAdministrador){
    	$this->iAdministrador = $iAdministrador;
    }

    public function getIAdministrador(){
    	return $this->iAdministrador;
    }

    public function registrarPersonal(){
    	return $this->iAdministrador->registrarAdministrador($this);
    }

    public function editarPersonal(){
    	return $this->iAdministrador->editarAdministrador($this);
    }

    public function obtenerPersonalId($idPersonal){
    	return $this->iAdministrador->obtenerAdministrador($idPersonal);
    }
    
    public function obtenerPersonalCorreo($correo){
    	return $this->iAdministrador->obtenerPersonalCorreo();
    }

    public function obtener

}