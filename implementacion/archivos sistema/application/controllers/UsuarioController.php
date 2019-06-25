<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UsuarioController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
    }
    
    public function index(){
       $this->vista();
    }

    public function vista($pagina = 'login'){
        $id = $this->session->userdata('id');
        if($id){
            $this->load->view('pages/principal_usuario_view');
        }else{
            if($pagina =='registrarUsuario'){
                $this->load->view("pages/registrar_usuario_view");
            }else if($pagina == 'login'){
                $this->load->view("pages/inicio_sesion_view");
            }else if($pagina == 'menuPrincipal'){
                $this->load->view("pages/menu_principal_view");
                 $this->load->view("pages/nuevo_proyecto_view");
            }
        }
    }

}