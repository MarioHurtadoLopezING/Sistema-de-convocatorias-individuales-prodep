<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('IAreaEducativa', FALSE) OR require_once(APPPATH.'libraries/interfaces/IAreaEducativa.php');

class AreaEducativaModelo extends CI_Model implements IAreaEducativa{

	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }

    public function registrar($areaEducativa){

    }

    public function editar($areaEducativa){

    }
    public function obtenerAreas(){
    	$consulta = $this->db->get('areaEducativa');
    	$areas = array();
    	foreach ($consulta->result() as $row) {
    		$area = array();
    		$area['idArea'] = $row->are_id;
    		$area['nombre'] = $row->are_nombre;
    		array_push($areas, $area);
    		#$res = $res . $row->reg_nombre;
    	}
    	return $areas;
    }
}