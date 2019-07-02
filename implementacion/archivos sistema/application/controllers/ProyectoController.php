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

    public function vista($pagina = 'consultarProyectos'){
    	if($this->session->userdata('idUsuario')){
    		$personal = $this->obtenerPersonalId();
    		if($pagina == 'consultarProyectos'){
    			$this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Proyectos registrados'));
    			$this->load->view('pages/consultar_proyectos_view');
    		}else if($pagina == 'nuevoProyecto'){
    			$this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Agregar proyecto'));
    			$this->load->view('pages/nuevo_proyecto_view');
    		}else{
    			show_404();
    		}
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
        $registrado = false;
        if($this->session->userdata('idUsuario')){
            $post = json_decode(file_get_contents('php://input'));
            $idDocente = $post->idDocente;
            $idDirector =$post->idDirector;
            $idAdministrador = $post->idAdministrador;
            $fechaInicioApoyo = $post->fechaInicioApoyo;
            $folioProdep = $post->folioProdep;
            $claveProgramatica = $post->claveProgramatica;
            $oficioAutorizacion = $post->oficioAutorizacion;
            $numeroDependencia = $post->numeroDependencia;
            $idRegion = $post->idRegion;
            $idArea = $post->idArea;
            $idEntidad = $post->idEntidad;
            $idConvocatoria = $post->idConvocatoria;
            $proyecto = new Proyecto();
            $proyecto->setClaveProgramatica($claveProgramatica);
            $proyecto->setFolioProdep($folioProdep);
            $proyecto->setOficioAutorizacion($oficioAutorizacion);
            $proyecto->setInicioApoyo($fechaInicioApoyo);
            $proyecto->setNumeroDependencia($numeroDependencia);
            $proyecto->setDocente($idDocente);
            $proyecto->setAdministrador($idAdministrador);
            $proyecto->setDirector($idDirector);
            $proyecto->setEntidadEducativa($idEntidad);
            $proyecto->setPersonal($this->session->userdata('idPersonal'));
            $proyecto->setAreaEducativa($idArea);
            $proyecto->setRegion($idRegion);
            $proyecto->setConvocatoria($idConvocatoria);
            $proyecto->setIProyecto(new ProyectoModelo());
            $registrado = $proyecto->registrar();
        }else{
            $registrado = false;
        }
        echo json_encode(array('estado'=>$registrado));
    }

    public function obtenerProyectos(){
        $proyecto = new Proyecto();
        $proyecto->setIProyecto(new ProyectoModelo());
        $proyecto = $proyecto->obtenerProyectos();
        $proyectoJSON = array();
        $proyectoJSON['proyectos'] = $proyecto;
        echo json_encode($proyectoJSON);
    }
}