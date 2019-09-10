<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EntidadEducativaController extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('EntidadEducativa');
        $this->load->model('EntidadEducativaModelo','entidadEducativaModelo');
    }

	public function obtenerEntidadesEducativas(){
		if($this->session->userdata('idUsuario')){
			$entidadEducativa = new EntidadEducativa();
			$entidadEducativa->setIEntidadEducativa(new EntidadEducativaModelo());
			$entidadEducativa = $entidadEducativa->obtenerEntidadesEducativas();
			$entidadEducativaJSON = array();
			$entidadEducativaJSON['entidades'] = $entidadEducativa;
			echo json_encode($entidadEducativaJSON);
		}else{
			redirect('UsuarioController');
		}
	}
}