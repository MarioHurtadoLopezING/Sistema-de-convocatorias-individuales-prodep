<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DestinatarioController extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Destinatario');
        $this->load->model('DestinatarioModelo','destinatarioModelo');
    }

    public function obtenerDestinatarios(){
    	$destinatario = new Destinatario();
    	$destinatario->setIDestinatario(new DestinatarioModelo());
    	$destinatario = $destinatario->obtenerDestinatarios();
    	$destinatarioJSON = array();
    	$destinatarioJSON['destinatarios'] = $destinatario;
    	echo json_encode($destinatarioJSON);
    }
}