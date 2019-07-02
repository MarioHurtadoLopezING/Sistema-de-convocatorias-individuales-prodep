<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('IDirector', FALSE) OR require_once(APPPATH.'libraries/interfaces/IDirector.php');

class DirectorModelo extends CI_Model implements IDirector{
	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }

    public function registrarPersonal($director){

    }
    public function editarPersonal($director){

    }
    public function obtenerPersonalCorreo($correo){
    	$director = new Director();
    	$consulta = $this->db->get_where('director', array('dir_correo'=>$correo));
    	if($consulta->num_rows() > 0){
    		$fila = $consulta->row();
    		$director->setIdPersonal($fila->dir_id);
    		$director->setNombre($fila->dir_nombre);
    		$director->setCorreo($fila->dir_correo);
    		$director->setIDirector($this);
    	}else{
    		$director->setIdPersonal(0);
    	}
    	return $director;
    }
}