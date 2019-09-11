<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('IAreaEducativa', FALSE) OR require_once(APPPATH.'libraries/interfaces/IBecario.php');

class BecarioModelo extends CI_Controller implements IBecario{

	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }

	public function obtenerBecarioCorreo($correo){
		$becario = new Becario();
    	$consulta = $this->db->get_where('becario',array('bec_correo'=>$correo));
    	if($consulta->num_rows() > 0){
    		$fila = $consulta->row();
    		$becario->setCorreo($fila->bec_correo);
    		$becario->setIdBecario($fila->bec_id);
    		$becario->setNombre($fila->bec_nombre);
    		$becario->setFechaInscripcion($fila->bec_fechaInscripcion);
    		$becario->setIBecario($this);
    	}else{
    		$becario->setIBecario(0);
    	}
    	return	$becario;
	}

    public function obtenerBecarios(){
        $consulta = $this->db->get('becario');
        $becarios = array();
        foreach ($consulta->result() as $row) {
            $becario = array();
            $becario['bec_nombre'] = $row->bec_nombre;
            $becario['bec_correo'] = $row->bec_correo;
            array_push($becarios, $becario);
        }
        return $becarios;
    }
}