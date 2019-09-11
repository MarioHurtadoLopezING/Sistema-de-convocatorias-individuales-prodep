<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DocenteController Extends CI_controller{
	
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Docente');
        $this->load->library('Personal');
        $this->load->model('DocenteModelo','docenteModelo');
        $this->load->model('PersonalModelo','personalModelo');
    }

    public function index(){
    	$this->vista();
    }

    public function vista(){
    	if($this->session->userdata('idUsuario')){
    		$personal = new Personal();
	    	$personal->setIPersonal(new PersonalModelo());
	    	$personal = $personal->obtenerPersonalId($this->session->userdata('idPersonal'));
	    	$this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Docentes'));
			$this->load->view('pages/consultar_docentes_view');
    	}else{
    		redirect('UsuarioController');
    	}
    }

    public function obtenerDocente(){
		if($this->session->userdata('idUsuario')){
			$docente = new Docente();
			$docente->setIDocente(new DocenteModelo());
			$docente = $docente->obtenerPersonalCorreo($this->input->post('correo'));
			$docenteJSON = array();
			$docenteJSON['idDocente'] = $docente->getIdPersonal();
			if($docente->getIdPersonal() > 0){
				$docenteJSON['nombreDocente'] = $docente->getNombre();
			}else{
				$docenteJSON['mensaje'] = 'El docente no se encuentra registrado';
			}
			echo json_encode($docenteJSON);
		}else{
			redirect('UsuarioController');
		}
    }

    public function obtenerDocenteId(){
    	if($this->session->userdata('idUsuario')){
    		$docente = new Docente();
			$docente->setIDocente(new DocenteModelo());
			$docente = $docente->obtenerPersonalId($this->input->post('idDocente'));
			$docenteJSON = array();
			$docenteJSON['idDocente'] = $docente->getIdPersonal();
			if($docente->getIdPersonal() > 0){
				$docenteJSON['nombreDocente'] = $docente->getNombre();
			}else{
				$docenteJSON['mensaje'] = 'El docente no se encuentra registrado';
			}
			echo json_encode($docenteJSON);
    	}else{
    		redirect('UsuarioController');
    	}
    }

    public function obtenerDocentes(){
    	if($this->session->userdata('idUsuario')){
    		$docente = new Docente();
    		$docente->setIDocente(new DocenteModelo());
    		$docentesJSON = array();
			$docentesJSON['docentes'] = $docente->obtenerDocentes();
			echo json_encode($docentesJSON);
    	}else{
    		redirect('UsuarioController');
    	}
    }
}