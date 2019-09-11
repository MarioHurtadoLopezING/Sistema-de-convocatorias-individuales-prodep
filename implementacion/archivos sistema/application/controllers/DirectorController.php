<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DirectorController extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Director');
        $this->load->library('Personal');
        $this->load->model('DirectorModelo','directorModelo');
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
            $this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Directores'));
            $this->load->view('pages/consultar_directores_view');
        }else{
            redirect('UsuarioController');
        }
    }

    public function obtenerDirector(){
    	if($this->session->userdata('idUsuario')){
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
        }else{
            redirect('UsuarioController');
        }
    }
    
    public function obtenerDirectorId(){
        if($this->session->userdata('idUsuario')){
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
        }else{
            redirect('UsuarioController');
        }
    }

    public function obtenerDirectores(){
        if($this->session->userdata('idUsuario')){
            $director = new Director();
            $director->setIDirector(new DirectorModelo());
            $directorJSON = array();
            $directorJSON['directores'] = $director->obtenerDirectores();
            echo json_encode($directorJSON);
        }else{
            redirect('UsuarioController');
        }
    }
    
}