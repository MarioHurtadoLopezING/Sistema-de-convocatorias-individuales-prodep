<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('IRegion', FALSE) OR require_once(APPPATH.'libraries/interfaces/IRegion.php');

class RegionModelo extends CI_Model implements IRegion{

	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }

    public function registrar($region){

    }

    public function editar($region){

    }

    public function obtenerRegiones(){
    	$consulta = $this->db->get('region');
    	$regiones = array();
    	foreach ($consulta->result() as $row) {
    		$region = array();
    		$region['idRegion'] = $row->reg_id;
    		$region['nombre'] = $row->reg_nombre;
    		array_push($regiones, $region);
    		#$res = $res . $row->reg_nombre;
    	}
    	return $regiones;
    }

}