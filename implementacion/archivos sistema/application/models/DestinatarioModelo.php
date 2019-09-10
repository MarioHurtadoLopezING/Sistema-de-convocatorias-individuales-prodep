<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('IAreaEducativa', FALSE) OR require_once(APPPATH.'libraries/interfaces/IDestinatario.php');

class DestinatarioModelo extends CI_Model implements IDestinatario{

	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }

    public function obtenerDestinatarios(){
    	$consulta = $this->db->get('destinatario');
    	$destinatarios = array();
    	foreach ($consulta->result() as $row) {
    		$destinatario = array();
    		$destinatario['idDestinatario'] = $row->des_id;
    		$destinatario['nombre'] = $row->des_nombre;
    		array_push($destinatarios, $destinatario);
    	}
    	return $destinatarios;
    }
}