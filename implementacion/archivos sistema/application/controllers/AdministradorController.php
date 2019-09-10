<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministradorController extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Administrador');
        $this->load->model('AdministradorModelo','administradorModelo');
    }

    public function obtenerAdministrador(){
        if($this->session->userdata('idUsuario')){
            $correo = $this->input->post('correo');
            $administrador = new Administrador();
            $administrador->setIAdministrador(new AdministradorModelo());
            $administrador = $administrador->obtenerPersonalCorreo($correo);
            $administradorJSON = array();
            $administradorJSON['idAdministrador'] = $administrador->getIdPersonal();
            if($administrador->getIdPersonal() > 0){
                $administradorJSON['nombreAdministrador'] = $administrador->getNombre();
            }else{
                $administradorJSON['mensaje'] = 'El administrador no se encuentra registrado';
            }
            echo json_encode($administradorJSON);
        }else{
            redirect('UsuarioController');
        }
    }

    public function obtenerAdministradorId(){
        if($this->session->userdata('idUsuario')){
            $idAdministrador = $this->input->post('idAdministrador');
            $administrador = new Administrador();
            $administrador->setIAdministrador(new AdministradorModelo());
            $administrador = $administrador->obtenerPersonalId($idAdministrador);
            $administradorJSON = array();
            $administradorJSON['idAdministrador'] = $administrador->getIdPersonal();
            if($administrador->getIdPersonal() > 0){
                $administradorJSON['nombreAdministrador'] = $administrador->getNombre();
            }else{
                $administradorJSON['mensaje'] = 'El administrador no se encuentra registrado';
            }
            echo json_encode($administradorJSON);
        }else{
            redirect('UsuarioController');
        }
    }
}