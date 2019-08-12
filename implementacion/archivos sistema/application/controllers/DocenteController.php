<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DocenteController Extends CI_controller{
	
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Docente');
        $this->load->model('DocenteModelo','docenteModelo');
    }

    public function obtenerDocente(){
    	$correoDocente = $this->input->post('correo');
		$docente = new Docente();
		$docente->setIDocente(new DocenteModelo());
		$docente = $docente->obtenerPersonalCorreo($correoDocente);
		$docenteJSON = array();
		$docenteJSON['idDocente'] = $docente->getIdPersonal();
		if($docente->getIdPersonal() > 0){
			$docenteJSON['nombreDocente'] = $docente->getNombre();
		}else{
			$docenteJSON['mensaje'] = 'El docente no se encuentra registrado';
		}
		echo json_encode($docenteJSON);
    }

    public function obtenerDocenteId(){
    	$idDocente = $this->input->post('idDocente');
    	$docente = new Docente();
		$docente->setIDocente(new DocenteModelo());
		$docente = $docente->obtenerPersonalId($idDocente);
		$docenteJSON = array();
		$docenteJSON['idDocente'] = $docente->getIdPersonal();
		if($docente->getIdPersonal() > 0){
			$docenteJSON['nombreDocente'] = $docente->getNombre();
		}else{
			$docenteJSON['mensaje'] = 'El docente no se encuentra registrado';
		}
		echo json_encode($docenteJSON);
    }

}