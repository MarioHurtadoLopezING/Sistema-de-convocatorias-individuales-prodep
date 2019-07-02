<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ConvocatoriaController extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Convocatoria');
        $this->load->model('ConvocatoriaModelo','convocatoriaModelo');
    }

    public function obtenerConvocatorias(){
    	$convocatoria = new Convocatoria();
    	$convocatoria->setIConvocatoria(new ConvocatoriaModelo());
    	$convocatoria = $convocatoria->obtenerConvocatorias();
    	$convocatoriasJSON = array();
    	$convocatoriasJSON['convocatorias'] = $convocatoria;
    	echo json_encode($convocatoriasJSON);

    }

}