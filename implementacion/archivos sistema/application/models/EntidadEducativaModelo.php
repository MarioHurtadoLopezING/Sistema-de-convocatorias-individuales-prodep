<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('IEntidadEducativa', FALSE) OR require_once(APPPATH.'libraries/interfaces/IEntidadEducativa.php');

class EntidadEducativaModelo extends CI_Model implements IEntidadEducativa{

	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }

	public function registrar($entidadEducativa){

	}

	public function editar($entidadEducativa){

	}
	public function obtenerEntidadesEducativas(){
		$consulta = $this->db->get('entidadEducativa');
		$entidades = array();
		foreach ($consulta->result() as $row) {
    		$entidad = array();
    		$entidad['idEntidad'] = $row->ent_id;
    		$entidad['nombre'] = $row->ent_nombre;
    		array_push($entidades, $entidad);
    	}
    	return json_encode($entidades);
	}
}