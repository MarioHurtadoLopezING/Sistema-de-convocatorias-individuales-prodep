<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/PersonalAdministrativo.php');

class Docente extends PersonalAdministrativo{
    
    private $numeroPersonal;
    private $iDocente;

    public function __construct(){
        
    }

    public function getNumeroPersonal(){
        return $this->numeroPersonal;
    }

    public function setNumeroPersonal($numeroPersonal){
        $this->numeroPersonal = $numeroPersonal;
    }

    public function setIDocente($iDocente){
        $this->iDocente = $iDocente;
    }

    public function getIDocente(){
        return  $this->iDocente;
    }

    public function registrarPersonal(){
        return $this->iDocente->registrarPersonal($this);
    }

    public function editarPersonal(){
        return $this->iDocente->editarPersonal($this);
    }

    public function obtenerPersonalCorreo($correo){
        return  $this->iDocente->obtenerPersonalCorreo($correo);
    }

    public function obtenerPersonalNumeroregistro($numeroPersonal){
        return $this->iDocente->obtenerPersonalNumeroregistro($numeroPersonal);
    }
    public function obtenerPersonalId($idPersonal){
        return $this->iDocente->obtenerPersonalId($idPersonal);
    }
}