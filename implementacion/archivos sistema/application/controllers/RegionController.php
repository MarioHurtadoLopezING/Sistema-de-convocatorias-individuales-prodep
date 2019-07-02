<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegionController extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Region');
        $this->load->model('RegionModelo','regionModelo');
    }

    public function obtenerRegiones(){
    	$region = new Region();
    	$region->setIRegion(new RegionModelo());
    	$region = $region->obtenerRegiones();
    	$regionesJSON = array();
    	$regionesJSON['regiones'] = $region;
    	echo json_encode($regionesJSON);
    }
}