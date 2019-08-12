<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/PersonalAdministrativo.php');

class Administrador extends PersonalAdministrativo{

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
    	return $this->iAdministrador->registrarPersonal($this);
    }

    public function editarPersonal(){
    	return $this->iAdministrador->editarPersonal($this);
    }

    public function obtenerPersonalCorreo($correo){
    	return $this->iAdministrador->obtenerPersonalCorreo($correo);
    }
    public function obtenerPersonalId($idAdministrador){
        return $this->iAdministrador->obtenerPersonalId($idAdministrador);
    }
}