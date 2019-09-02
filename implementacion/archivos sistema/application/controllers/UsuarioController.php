<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UsuarioController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Usuario');
        $this->load->library('Personal');
        $this->load->model('PersonalModelo','personalModelo');
        $this->load->model('UsuarioModelo','usuarioModelo');
    }
    
    public function index(){
       $this->vista();
    }

    public function vista($pagina = 'login'){
        if($this->session->userdata('idUsuario')){
            redirect('ProyectoController');
        }else{
            if($pagina == 'login'){
                $this->mostrarInicioSesion();
            }else if($pagina =='registrarUsuario'){
                $this->load->view("pages/registrar_usuario_view");
            }else{
                show_404();
            }
        }
    }

    public function registrarPersonal(){
        $personal = new Personal();
        $personal->setNombre($this->input->post('nombre'));
        $personal->setCorreo($this->input->post('correo'));
        $personal->setRol('coordinador');
        $personal->setIPersonal(new PersonalModelo());
        if($personal->registrar()){
            $personal = $personal->obtenerPersonalCorreo();
            if($personal->getIdPersonal() != 0){
                if ($this->registrarUsuario($personal,$this->input->post('usuario'), $this->input->post('contrasena'))){
                    echo "usuario registrado";
                }   
            }else{
                echo "el usuario no ha podido registrarse";
            }
        }else{
            echo "el personal no ha podido registrarse";
        }
    }

    private function registrarUsuario($personal, $nombreUsuario, $contrasena){
        $usuario = new Usuario();
        $usuario->setIUsuario(new UsuarioModelo());
        $usuario->setPersonal($personal);
        $usuario->setNombre($nombreUsuario);
        $usuario->setContrasena($contrasena);
        return $usuario->registrar();
    }

    public function iniciarSesion(){
        $usuario = new Usuario();
        $usuario->setIUsuario(new UsuarioModelo());
        $usuario = $usuario->iniciarSesion($this->input->post('usuario'), $this->input->post('contrasena'));
        if($usuario->getIdUsuario() != 0){
            $this->session->set_userdata('idUsuario',$usuario->getIdUsuario());
            $this->session->set_userdata('idPersonal',$usuario->getPersonal());
            redirect('UsuarioController/vista');
        }else{
            $this->mostrarInicioSesion('El nombre de usuario y/o contraseña son incorrectos.');
        }
    }

    private function mostrarInicioSesion($mensaje = ''){
        $this->load->view("pages/inicio_sesion_view",array('mensaje'=>$mensaje));
    }

    public function cerrarSesion(){
        $this->session->unset_userdata('idUsuario');
        $this->session->unset_userdata('idPersonal');
        redirect('UsuarioController/vista');
    }
}