<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('iConvocatoria', FALSE) OR require_once(APPPATH.'libraries/interfaces/IDocumento.php');

class DocumentoModelo extends CI_Model implements IDocumento{
	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }

    public function registrarDocumento($documento){
    	$data = array(
    		'doc_id'=>$documento->getIdDocumento(),
			'doc_nombre'=>$documento->getNombre(),
			'doc_estado'=>$documento->getEstado(),
			'reg_id'=>$documento->getRegistroConvocatoria());
    	return $this->db->insert('documento',$data);
    }

    public function obtenerDocumentos($idRegistroConvocatoria){
        $documentos = array();
        $consulta = $this->db->get_where('documento',array('reg_id'=>$idRegistroConvocatoria));
        foreach ($consulta->result() as $row) {
            $documento = array();
            $documento['doc_id'] = $row->doc_id;
            $documento['doc_nombre'] = $row->doc_nombre;
            $documento['doc_estado'] = $row->doc_estado;
            array_push($documentos, $documento);
        }
        return $documentos;
    }

    public function editarDocumento($documento){
        $data = array(
            'doc_nombre'=>$documento->getNombre(),
            'doc_estado'=>$documento->getEstado(),
            'reg_id'=>$documento->getRegistroConvocatoria());
        $this->db->where('doc_id',$documento->getIdDocumento());
        return $this->db->update('documento',$data);
    }
}
