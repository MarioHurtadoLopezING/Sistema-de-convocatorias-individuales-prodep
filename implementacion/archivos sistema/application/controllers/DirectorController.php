<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DirectorController extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Director');
        $this->load->model('DirectorModelo','directorModelo');
    }

    public function obtenerDirector(){
    	$director = new Director();
    	$director->setIDirector(new DirectorModelo());
    	$director = $director->obtenerPersonalCorreo($this->input->post('correo'));
    	$directorJSON = array();
    	$directorJSON['idDirector'] = $director->getIdPersonal();
    	if($director->getIdPersonal() > 0){
    		$directorJSON['nombreDirector'] = $director->getNombre();
    	}else{
    		$directorJSON['mensaje'] = 'El director no se encuentra registrado';
    	}
    	echo json_encode($directorJSON);
    }
    
    public function obtenerDirectorId(){
        $director = new Director();
        $director->setIDirector(new DirectorModelo());
        $director = $director->obtenerPersonalId($this->input->post('idDirector'));
        $directorJSON = array();
        $directorJSON['idDirector'] = $director->getIdPersonal();
        if($director->getIdPersonal() > 0){
            $directorJSON['nombreDirector'] = $director->getNombre();
        }else{
            $directorJSON['mensaje'] = 'El director no se encuentra registrado';
        }
        echo json_encode($directorJSON);
    }
    
}