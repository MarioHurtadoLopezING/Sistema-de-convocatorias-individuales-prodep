<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegistroConvocatoriaController extends CI_Controller{
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Usuario');
        $this->load->library('Personal');
        $this->load->library('Proyecto');
        $this->load->library('Documento');
        $this->load->library('RegistroConvocatoria');
        $this->load->model('PersonalModelo','personalModelo');
        $this->load->model('UsuarioModelo','usuarioModelo');
        $this->load->model('ProyectoModelo','proyectoModelo');
        $this->load->model('DocenteModelo','docenteModelo');
        $this->load->model('RegistroConvocatoriaModelo','registroConvocatoriaModelo');
        $this->load->model('DocumentoModelo','documentoModelo');
    }
    public function index(){
    	$this->vista();
    }

    public function vista($pagina = 'consultarRegistrosConvocatorias', $idConvocatoria = ""){
    	if($this->session->userdata('idUsuario')){
    		$personal = $this->obtenerPersonalId();
    		if($pagina == 'consultarRegistrosConvocatorias'){
    			$this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Convocatorias <span class="esconder">registradas</span>'));
				$this->load->view('pages/consultar_convocatorias_view');
    		}else if($pagina == 'nuevaConvocatoria'){
    			$this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Nueva <span class="esconder">convocatoria</span>'));
				$this->load->view('pages/nuevo_convocatoria_view');
    		}else if($pagina == 'editarConvocatoria'){
    			$this->load->view('pages/menu_principal_view',array('nombrePersonal'=>$personal->getNombre(),'tituloPagina'=> 'Editar <span class="esconder">convocatoria</span>'));
				$this->load->view('pages/editar_convocatoria_view', array('idConvocatoria'=>$idConvocatoria));
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

    public function registrarConvocatoria(){
    	if($this->session->userdata('idUsuario')){
    		$post = json_decode(file_get_contents('php://input'));
    		$registroConvocatoria = new RegistroConvocatoria();
    		$registroConvocatoria->setIRegistroConvocatoria(new RegistroConvocatoriaModelo());
    		$registroConvocatoria->setAnoConvocatoria($post->anoConvocatoria);
			$registroConvocatoria->setEstado($post->estado);
			$registroConvocatoria->setFechaVoBo($post->fechaVoBo);
			$registroConvocatoria->setProyecto($post->idProyecto);
			$registroConvocatoria->setBecario($post->idBecario);
            $registroConvocatoria->setFechaInicioBecario($post->fechaIncioBecario);
			echo json_encode($registroConvocatoria->registrarConvocatoria());		
    	}else{
    		redirect('UsuarioController');
    	}
    }
    public function obtenerConvocatorias(){
        if($this->session->userdata('idUsuario')){
            $convocatoria = new RegistroConvocatoria();
            $convocatoria->setIRegistroConvocatoria(new RegistroConvocatoriaModelo());
            $convocatoria = $convocatoria->obtenerconvocatorias();
            $convocatoriaJSON = array();
            $convocatoriaJSON['convocatorias'] = $convocatoria;
            echo json_encode($convocatoriaJSON);
        }else{
            redirect('UsuarioController');
        }
    }
    public function obtenerConvocatoria(){
        if($this->session->userdata('idUsuario')){
            $convocatoria = new RegistroConvocatoria();
            $convocatoria->setIRegistroConvocatoria(new RegistroConvocatoriaModelo());
            $convocatoriaJSON = array();
            $convocatoriaJSON['convocatoria'] = $convocatoria->obtenerConvocatoria($this->input->post('idConvocatoria'));
            $documento = new Documento();
            $documento->setIDocumento(new DocumentoModelo());
            $convocatoriaJSON['convocatoria']['documentos'] = $documento->obtenerDocumentos($this->input->post('idConvocatoria'));

            echo json_encode($convocatoriaJSON);
        }else{
            redirect('UsuarioController');
        }
    }
    public function editarConvocatoria(){
        if($this->session->userdata('idUsuario')){
            $post = json_decode(file_get_contents('php://input'));
            $registroConvocatoria = new RegistroConvocatoria();
            $registroConvocatoria->setIRegistroConvocatoria(new RegistroConvocatoriaModelo());
            $registroConvocatoria->setIdRegistroConvocatoria($post->idConvocatoria);
            $registroConvocatoria->setAnoConvocatoria($post->anoConvocatoria);
            $registroConvocatoria->setEstado($post->estado);
            $registroConvocatoria->setFechaVoBo($post->fechaVoBo);
            $registroConvocatoria->setProyecto($post->idProyecto);
            $registroConvocatoria->setBecario($post->idBecario);
            $registroConvocatoria->setFechaInicioBecario($post->fechaIncioBecario);
            echo json_encode($registroConvocatoria->editarConvocatoria());
        }else{
            redirect('UsuarioController');
        }
    }


}