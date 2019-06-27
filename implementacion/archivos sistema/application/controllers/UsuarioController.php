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

    public function vista($pagina = 'login', $contenido ='consultarProyectos'){
        $id = $this->session->userdata('id');
        if($id){
             $this->load->view("pages/menu_principal_view");
        }else{
            if($pagina =='registrarUsuario'){
                $this->load->view("pages/registrar_usuario_view");
            }else if($pagina == 'login'){
                $this->load->view("pages/inicio_sesion_view");
            }else if($pagina == 'menuPrincipal'){
                $this->load->view("pages/menu_principal_view");
                $this->contenidoPagina($contenido);
            }
        }
    }

    private function contenidoPagina($contenido = 'consultarProyectos'){
        if($contenido == 'nuevoProyecto'){
            $this->load->view("pages/nuevo_proyecto_view");
        }else if ($contenido == 'consultarProyectos'){
            $this->load->view("pages/consultar_proyectos_view");
        } 
    }

    public function registrarPersonal(){
        $nombre = $this->input->post('nombre');
        $correo = $this->input->post('correo');
        $nombreUsuario = $this->input->post('usuario');
        $contrasena = $this->input->post('contrasena');
        $personal = new Personal();
        $personal->setNombre($nombre);
        $personal->setCorreo($correo);
        $personal->setRol('coordinador');
        $personal->setIPersonal(new PersonalModelo());
        if($personal->registrar()){
            $personal = $personal->obtenerPersonalCorreo();
            if($personal->getIdPersonal() != 0){
                if ($this->registrarUsuario($personal, $nombreUsuario, $contrasena)){
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
        $nombreUsuario = $this->input->post('usuario');
        $contrasena = $this->input->post('contrasena');
        $usuario = new Usuario();
        $usuario->setIUsuario(new UsuarioModelo());
        $usuario = $usuario->iniciarSesion($nombreUsuario, $contrasena);
        if($usuario->getIdUsuario() != 0){
            $this->session->set_userdata('id',$usuario->getIdUsuario());
            $this->vista('menuPrincipal');
        }else{
            echo "el usuario no existe";
        }
    }

}