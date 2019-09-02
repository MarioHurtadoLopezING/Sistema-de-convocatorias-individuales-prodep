<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProyectoController extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Usuario');
        $this->load->library('Personal');
        $this->load->library('Proyecto');
        $this->load->model('PersonalModelo','personalModelo');
        $this->load->model('UsuarioModelo','usuarioModelo');
        $this->load->model('ProyectoModelo','proyectoModelo');

    }
    
    public function index(){
       $this->vista();
    }

    public function vista($pagina = 'consultarProyectos',$idProyecto = ""){
    	if($this->session->userdata('idUsuario')){
    		$personal = $this->obtenerPersonalId();
    		if($pagina == 'consultarProyectos'){
    			$this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Proyectos registrados'));
    			$this->load->view('pages/consultar_proyectos_view');
    		}else if($pagina == 'nuevoProyecto'){
    			$this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Agregar proyecto'));
    			$this->load->view('pages/nuevo_proyecto_view');
    		}else if ($pagina == 'editarProyecto'){
                $this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Editar proyecto'));
                $this->load->view('pages/editar_proyecto_view',array('idProyecto'=>$idProyecto));
            }else{
    			show_404();
    		}
    	}else{
    		redirect('UsuarioController');
    	}
    }

    public function editarProyecto($idProyecto){
        if($this->session->userdata('idUsuario')){
            $this->vista('editarProyecto',$idProyecto);
        }else{
            redirect('UsuarioController');
        }
    }

    private function obtenerPersonalId(){
    	$personal = new Personal();
    	$personal->setIPersonal(new PersonalModelo());
    	return $personal->obtenerPersonalId($this->session->userdata('idPersonal'));
    }

    public function registrarProyecto(){
        if($this->session->userdata('idUsuario')){
            $post = json_decode(file_get_contents('php://input'));
            $proyecto = new Proyecto();
            $proyecto->setClaveProgramatica($post->claveProgramatica);
            $proyecto->setFolioProdep($post->folioProdep);
            $proyecto->setOficioAutorizacion($post->oficioAutorizacion);
            $proyecto->setInicioApoyo($post->fechaInicioApoyo);
            $proyecto->setNumeroDependencia($post->numeroDependencia);
            $proyecto->setDocente($post->idDocente);
            $proyecto->setAdministrador($post->idAdministrador);
            $proyecto->setDirector($post->idDirector);
            $proyecto->setEntidadEducativa($post->idEntidad);
            $proyecto->setPersonal($this->session->userdata('idPersonal'));
            $proyecto->setAreaEducativa($post->idArea);
            $proyecto->setRegion($post->idRegion);
            $proyecto->setConvocatoria($post->idConvocatoria);
            $proyecto->setIProyecto(new ProyectoModelo());
             echo json_encode(array('estado'=>$proyecto->registrar()));
        }else{
            redirect('UsuarioController');
        }
    }

    public function editarProyectoRegistro(){
        if($this->session->userdata('idUsuario')){
            $post = json_decode(file_get_contents('php://input'));
            $proyecto = new Proyecto();
            $proyecto->setIdProyecto($post->idProyecto);
            $proyecto->setFinApoyo($post->fechaFinApoyo);
            $proyecto->setClaveProgramatica($post->claveProgramatica);
            $proyecto->setFolioProdep($post->folioProdep);
            $proyecto->setOficioAutorizacion($post->oficioAutorizacion);
            $proyecto->setInicioApoyo($post->fechaInicioApoyo);
            $proyecto->setNumeroDependencia($post->numeroDependencia);
            $proyecto->setDocente($post->idDocente);
            $proyecto->setAdministrador($post->idAdministrador);
            $proyecto->setDirector($post->idDirector);
            $proyecto->setEntidadEducativa($post->idEntidad);
            $proyecto->setPersonal($this->session->userdata('idPersonal'));
            $proyecto->setAreaEducativa($post->idArea);
            $proyecto->setRegion($post->idRegion);
            $proyecto->setConvocatoria($post->idConvocatoria);
            $proyecto->setIProyecto(new ProyectoModelo());
            $registrado = $proyecto->editar();
            echo json_encode(array('estado'=>$registrado, 'post'=>$post));
        }else{
            redirect('UsuarioController');
        }
    }

    public function obtenerProyectos(){
        if($this->session->userdata('idUsuario')){
            $proyecto = new Proyecto();
            $proyecto->setIProyecto(new ProyectoModelo());
            $proyecto = $proyecto->obtenerProyectos();
            $proyectoJSON = array();
            $proyectoJSON['proyectos'] = $proyecto;
            echo json_encode($proyectoJSON);
        }else{
            redirect('UsuarioController');
        }
    }

    public function obtenerProyecto(){
        if($this->session->userdata('idUsuario')){
            $proyecto = new Proyecto();
            $proyecto->setIProyecto(new ProyectoModelo());
            $proyectoJSON = array();
            $proyectoJSON['proyecto'] = $proyecto->obtenerProyecto($this->input->post('idProyecto'));
            echo json_encode($proyectoJSON);
        }else{
            redirect('UsuarioController');
        }
    }

    public function obtenerProyectoFolioProdep(){
        if($this->session->userdata('idUsuario')){
            $proyecto = new Proyecto();
            $proyecto->setIProyecto(new ProyectoModelo());
            $proyectoJSON = array();
            $proyectoJSON['proyecto'] = $proyecto->obtenerProyectoFolioProdep($this->input->post('folioProdep'));
            echo json_encode($proyectoJSON);
        }else{
            redirect('UsuarioController');
        }
    }

}