<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AreaController extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('AreaEducativa');
        $this->load->model('AreaEducativaModelo','areaEducativaModelo');
    }

	public function obtenerAreas(){
		$areaEducativa = new AreaEducativa();
		$areaEducativa->setIAreaEducativa(new AreaEducativaModelo());
		$areaEducativa = $areaEducativa->obtenerAreas();
		$areaEducativaJSON = array();
		$areaEducativaJSON['areas'] = $areaEducativa;
		echo json_encode($areaEducativaJSON);
	}
}