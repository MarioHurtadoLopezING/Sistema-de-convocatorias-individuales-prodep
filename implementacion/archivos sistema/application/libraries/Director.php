<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/PersonalAdministrativo.php');

class Director extends PersonalAdministrativo{

    private $iDirector;

    public function __construct(){
        
    }

    public function setIDirector($iDirector){
    	$this->iDirector = $iDirector;
    }

    public function getIDirector(){
    	return $this->iDirector;
    }

    public function registrarPersonal(){
    	return $this->iDirector->registrarPersonal($this);
    }

    public function editarPersonal(){
    	return $this->iDirector->editarPersonal($this);
    }

    public function obtenerPersonalCorreo($correo){
    	return $this->iDirector->obtenerPersonalCorreo($correo);
    }
    public function obtenerPersonalId($idPersonal){
        return $this->iDirector->obtenerPersonalId($idPersonal);
    }
    public function obtenerDirectores(){
        return $this->iDirector->obtenerDirectores();
    }
}