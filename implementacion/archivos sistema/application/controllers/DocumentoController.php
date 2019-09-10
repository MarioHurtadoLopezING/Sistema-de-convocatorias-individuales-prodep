<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DocumentoController extends CI_Controller{

public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Administrador');
        $this->load->library('Documento');
        $this->load->model('AdministradorModelo','administradorModelo');
        $this->load->model('DocumentoModelo','documentoModelo');
    }

    public function registrarDocumento(){
    	if($this->session->userdata('idUsuario')){
    		$post = json_decode(file_get_contents('php://input'));
            $registado = array(
        		$this->registrar('cartaPresentacion',$post->idRegistroConvocatoria,$post->cartaPresentacion),
        		$this->registrar('actaNacimiento',$post->idRegistroConvocatoria,$post->actaNacimiento),
                $this->registrar('cartaCompromiso',$post->idRegistroConvocatoria,$post->cartaCompromiso),
                $this->registrar('constanciaEstudios',$post->idRegistroConvocatoria,$post->constanciaEstudios),
                $this->registrar('credenciaElector',$post->idRegistroConvocatoria,$post->credenciaElector),
                $this->registrar('curp',$post->idRegistroConvocatoria,$post->curp),
                $this->registrar('numeroCuenta',$post->idRegistroConvocatoria,$post->numeroCuenta),
                $this->registrar('rfc',$post->idRegistroConvocatoria,$post->rfc));
            $documentosRegistrados = false;
            foreach ($registado as $i => $value) {
                if($registado[$i]){
                    $documentosRegistrados = true;
                }else{
                    break;
                }
            }
    		echo json_encode(array('estado'=>$documentosRegistrados));
    	}else{
    		redirect('UsuarioController');
    	}
    }

    private function registrar($nombre, $idRegistroConvocatoria, $estado){
        $documento = new Documento();
        $documento->setIDocumento(new DocumentoModelo());
        $documento->setNombre($nombre);
        $documento->setEstado($estado);
        $documento->setRegistroConvocatoria($idRegistroConvocatoria);
        return $documento->registrarDocumento();
    }
    
    public function obtenerDocumentos(){
        if($this->session->userdata('idUsuario')){
            $documento = new Documento();
            $documento->setIDocumento(new DocumentoModelo());
            $documentosJSON = array();
            $documentosJSON['documentos'] = $documento->obtenerDocumentos($this->input->post('idRegistroConvocatoria'));
            echo json_encode($documentosJSON);
        }else{
            redirect('UsuarioController');
        }
    }

    public function editarDocumentos(){
        if($this->session->userdata('idUsuario')){
            $post = json_decode(file_get_contents('php://input'));
             $editado = array(
                $this->editar('cartaPresentacion',$post->idRegistroConvocatoria,$post->cartaPresentacion,$post->idCartaPresentacion),
                $this->editar('actaNacimiento',$post->idRegistroConvocatoria,$post->actaNacimiento,$post->idActaNacimiento),
                $this->editar('cartaCompromiso',$post->idRegistroConvocatoria,$post->cartaCompromiso,$post->idCartaCompromiso),
                $this->editar('constanciaEstudios',$post->idRegistroConvocatoria,$post->constanciaEstudios,$post->idConstanciaEstudios),
                $this->editar('credenciaElector',$post->idRegistroConvocatoria,$post->credenciaElector,$post->idCredencialElector),
                $this->editar('curp',$post->idRegistroConvocatoria,$post->curp,$post->idCurp),
                $this->editar('numeroCuenta',$post->idRegistroConvocatoria,$post->numeroCuenta,$post->idNumeroCuenta),
                $this->editar('rfc',$post->idRegistroConvocatoria,$post->rfc,$post->idRfc));
            $documentosEditados = false;
            foreach ($editado as $i => $value) {
                if($editado[$i]){
                    $documentosEditados = true;
                }else{
                    break;
                }
            }
            echo json_encode(array('estado'=>$documentosEditados));
        }else{
            redirect('UsuarioController');
        }
    }
    private function editar($nombre, $idRegistroConvocatoria, $estado, $idDocumento){
        $documento = new Documento();
        $documento->setIDocumento(new DocumentoModelo());
        $documento->setNombre($nombre);
        $documento->setEstado($estado);
        $documento->setIdDocumento($idDocumento);
        $documento->setRegistroConvocatoria($idRegistroConvocatoria);
        return $documento->editarDocumento();
    }
}