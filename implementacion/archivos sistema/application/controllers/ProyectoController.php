<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProyectoController extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Usuario');
        $this->load->library('Personal');
        $this->load->model('PersonalModelo','personalModelo');
        $this->load->model('UsuarioModelo','usuarioModelo');
    }
    
    public function index(){
       $this->vista();
    }

    public function vista($pagina = 'consultarProyectos'){
    	if($this->session->userdata('idUsuario')){
    		$personal = $this->obtenerPersonalId();
    		if($pagina == 'consultarProyectos'){
    			$this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Proyectos registrados'));
    			$this->load->view('pages/consultar_proyectos_view');
    		}else if($pagina == 'nuevoProyecto'){
    			$this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Agregar proyecto'));
    			$this->load->view('pages/nuevo_proyecto_view');
    		}else{
    			show_404();
    		}
    	}else{
    		redirect('UsuarioController');
    	}
    }

    private function obtenerPersonalId(){
    	$personal = new Personal();
    	$personal->setIPersonal(new PersonalModelo());
    	return $personal->obtenerPersonalId($this->session->userdata('idPersonal'));
    } 
}