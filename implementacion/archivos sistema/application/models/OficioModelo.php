<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('IRegion', FALSE) OR require_once(APPPATH.'libraries/interfaces/IOficio.php');

class OficioModelo extends CI_model implements IOficio{

	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }

    public function registrarOficio($oficio){
    	$data = array(
    		'ofi_id' => 0,
			'ofi_numeroOficio' => $oficio->getNumeroOficio(),
			'ofi_anoConvocatoria' => $oficio->getAnoConvocatoria(),
			'ofi_folioProdep' => $oficio->getFolioProdep(),
			'ofi_asunto'=> $oficio->getAsunto(),
			'ofi_monto' => $oficio->getMonto(),
			'ofi_fechaEnvio' => $oficio->getFechaEnvio(),
			'des_id' => $oficio->getDestinatario(),
			'con_id'=> $oficio->getConvocatoria(),
            'pro_id'=>$oficio->getProyecto());
    	return $this->db->insert('oficio',$data);
    }
    public function editarOficio($oficio){
        $data = array(
            'ofi_numeroOficio' => $oficio->getNumeroOficio(),
            'ofi_anoConvocatoria' => $oficio->getAnoConvocatoria(),
            'ofi_folioProdep' => $oficio->getFolioProdep(),
            'ofi_asunto' => $oficio->getAsunto(),
            'ofi_monto' => $oficio->getMonto(),
            'ofi_fechaEnvio' => $oficio->getFechaEnvio(),
            'ofi_fechaRespuesta' => $oficio->getFechaRespuesta(),
            'ofi_aprobado' => $oficio->getAprobado(),
            'des_id' => $oficio->getDestinatario(),
            'con_id' => $oficio->getConvocatoria());
        $this->db->where('ofi_id',$oficio->getIdOficio());
        return $this->db->update('oficio',$data);
    }

    public function obtenerOficios(){
        $consulta = $this->db->get('oficio');
        $oficios = array();
        foreach ($consulta->result() as $row) {
            $oficio = array();
            $oficio['idOficio'] = $row->ofi_id;
            $oficio['numeroOficio'] = $row->ofi_numeroOficio;
            $oficio['anoConvocatoria'] = $row->ofi_anoConvocatoria;
            $oficio['folioProdep'] = $row->ofi_folioProdep;
            $oficio['asunto'] = $row->ofi_asunto;
            $oficio['monto'] = $row->ofi_monto;
            $oficio['fechaEnvio'] = $row->ofi_fechaEnvio;
            $oficio['idProyecto'] = $row->pro_id;
            array_push($oficios,$oficio);
        }
        return $oficios;
    }

    public function obtenerOficio($idOficio){
        $oficio = array();
        $consulta = $this->db->get_where('oficio',array('ofi_id'=>$idOficio));
        if($consulta->num_rows() > 0){
            $row = $consulta->row();
            $oficio['idOficio'] =$row->ofi_id;
            $oficio['numeroOficio'] = $row->ofi_numeroOficio;
            $oficio['anoConvocatoria'] =$row->ofi_anoConvocatoria;
            $oficio['folioProdep'] = $row->ofi_folioProdep;
            $oficio['asunto'] = $row->ofi_asunto;
            $oficio['monto'] = $row->ofi_monto;
            $oficio['fechaEnvio'] = $row->ofi_fechaEnvio;
            $oficio['fechaRespuesta'] = $row->ofi_fechaRespuesta;
            $oficio['aprobado'] = $row->ofi_aprobado;
            $oficio['idDestinatario'] = $row->des_id;
            $oficio['idConvocatoria'] = $row->con_id;
            $oficio['idProyecto'] = $row->pro_id;

        }else{
            $oficio['idOficio'] = 0;
        }
        return $oficio;
    }
}











