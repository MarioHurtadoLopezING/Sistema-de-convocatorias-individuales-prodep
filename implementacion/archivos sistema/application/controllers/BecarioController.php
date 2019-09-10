<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BecarioController extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Administrador');
        $this->load->library('Becario');
        $this->load->model('AdministradorModelo','administradorModelo');
        $this->load->model('BecarioModelo','becarioModelo');
    }
    public function obtenerBecario(){
    	if($this->session->userdata('idUsuario')){
			$becario = new Becario();
			$becario->setIBecario(new BecarioModelo());
			$becario = $becario->obtenerBecarioCorreo($this->input->post('correoBecario'));
			$becarioJSON = array();
			$becarioJSON['idBecario'] = $becario->getIdBecario();
			if($becario->getIdBecario() > 0){
				$becarioJSON['nombre'] = $becario->getNombre();
			}else{
				$becarioJSON['mensaje'] = 'El becario no se encuentra registrado';
			}
			echo json_encode($becarioJSON);
		}else{
			redirect('UsuarioController');
		}
    }

}