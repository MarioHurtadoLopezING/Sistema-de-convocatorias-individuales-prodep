<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OficioController extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Usuario');
        $this->load->library('Personal');
        $this->load->library('Proyecto');
        $this->load->library('Oficio');
        $this->load->model('PersonalModelo','personalModelo');
        $this->load->model('UsuarioModelo','usuarioModelo');
        $this->load->model('ProyectoModelo','proyectoModelo');
        $this->load->model('OficioModelo','oficioModelo');
        $this->load->model('DocenteModelo','docenteModelo');

    }
    
    public function index(){
       $this->vista();
    }

    public function vista($pagina = 'consultarOficios'){//nuevoOficio
    	if($this->session->userdata('idUsuario')){
			$personal = $this->obtenerPersonalId();
    		if($pagina == 'consultarOficios'){
    			$this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Oficios <span class="esconder">registrados</span>'));
                $this->load->view('pages/consultar_oficios_view');
    		}else if ($pagina == 'nuevoOficio'){
    			$this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Agregar <span class="esconder">oficio</span>'));
    			$this->load->view('pages/nuevo_oficio_view');
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

    public function registrarOficio(){
        if($this->session->userdata('idUsuario')){
            $post = json_decode(file_get_contents('php://input'));
            $oficio = new Oficio();
            $oficio->setIOficio(new OficioModelo());
            $oficio->setNumeroOficio($post->numeroOficio);
            $oficio->setDestinatario($post->idDestinatario);
            $oficio->setProyecto( $post->idProyecto);
            $oficio->setConvocatoria($post->idConvocatoria);
            $oficio->setFolioProdep($post->claveProdep);
            $oficio->setAsunto($post->asunto);
            $oficio->setMonto($post->monto);
            $oficio->setFechaEnvio($post->fechaEnvio);
            $oficio->setAnoConvocatoria($post->anoConvocatoria);
            echo json_encode(array('estado'=>$oficio->registrarOficio()));
        }else{
            redirect('UsuarioController');
        }
        
    }

    public function editarOficio($idOficio){
        if($this->session->userdata('idUsuario')){
            $personal = $this->obtenerPersonalId();
            $this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Editar <span class="esconder">oficio</span>'));
                $this->load->view('pages/editar_oficio_view', array('idOficio'=>$idOficio));
        }else{
            redirect('UsuarioController');
        }

    }

    public function obtenerOficios(){
        if($this->session->userdata('idUsuario')){
            $oficio = new Oficio();
            $oficio->setIOficio(new OficioModelo());
            $oficio = $oficio->obtenerOficios();
            for($i = 0; $i < sizeof($oficio); $i++){
                $proyecto = new Proyecto();
                $proyecto->setIProyecto(new ProyectoModelo());
                $proyecto = $proyecto->obtenerProyecto($oficio[$i]['idProyecto']);
                $docente = new Docente();
                $docente->setIDocente(new DocenteModelo());
                $docente = $docente->obtenerPersonalId($proyecto['docente']);
                $oficio[$i]['docente']['idDocente'] =$docente->getIdPersonal();
                $oficio[$i]['docente']['nombre'] =$docente->getNombre();
                $oficio[$i]['docente']['numeroPersonal'] =$docente->getNumeroPersonal();
            }
            $oficioJSON = array();
            $oficioJSON['oficios'] = $oficio;
            echo json_encode($oficioJSON);
        }else{
            redirect('UsuarioController');
        }
    }

    public function obtenerOficio(){
        if($this->session->userdata('idUsuario')){
            $oficio = new Oficio();
            $oficio->setIOficio(new OficioModelo());
            $oficioJSON = array(); 
            $proyecto = new Proyecto();
            $proyecto->setIProyecto(new ProyectoModelo());
            $oficioJSON['oficio'] = $oficio->obtenerOficio($this->input->post('idOficio'));
            $proyecto = $proyecto->obtenerProyecto($oficioJSON['oficio']['idProyecto']);
            $docente = new Docente();
            $docente->setIDocente(new DocenteModelo());
            $docente = $docente->obtenerPersonalId($proyecto['docente']);
            $oficioJSON['oficio']['docente']['nombre'] = $docente->getNombre(); 
            echo json_encode($oficioJSON);
        }else{
            redirect('UsuarioController');
        }
    }

    public function editarOficioRegistro(){
        if($this->session->userdata('idUsuario')){
            $post = json_decode(file_get_contents('php://input'));
            $oficio = new Oficio();
            $oficio->setIOficio(new OficioModelo());
            $oficio->setIdOficio($post->idOficio);
            $oficio->setNumeroOficio($post->numeroOficio);
            $oficio->setDestinatario($post->idDestinatario);
            $oficio->setConvocatoria($post->idConvocatoria);
            $oficio->setFolioProdep($post->claveProdep);
            $oficio->setAsunto($post->asunto);
            $oficio->setMonto($post->monto);
            $oficio->setFechaEnvio($post->fechaEnvio);
            $oficio->setAnoConvocatoria($post->anoConvocatoria);
            $oficio->setFechaRespuesta($post->fechaRespuesta);
            $oficio->setAprobado($post->aprobado);
            echo json_encode(array('estado'=>$oficio->editarOficio()));
        }else{
            redirect('UsuarioController');
        }
    }

}