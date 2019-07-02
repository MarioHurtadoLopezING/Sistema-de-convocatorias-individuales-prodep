<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('iConvocatoria', FALSE) OR require_once(APPPATH.'libraries/interfaces/iConvocatoria.php');

class ConvocatoriaModelo extends CI_Model implements IConvocatoria{

	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }

	public function registrar($convocatoria){
	
	}

	public function editar($convocatoria){
		
	}

	public function obtenerConvocatorias(){
		$consulta = $this->db->get('convocatoria');
		$convocatorias = array();
		foreach ($consulta->result() as $row) {
			$convocatoria = array();
			$convocatoria['idConvocatoria'] = $row->con_id;
			$convocatoria['nombre'] = $row->con_nombre;
			array_push($convocatorias, $convocatoria);
		}
		return $convocatorias;
	}
}