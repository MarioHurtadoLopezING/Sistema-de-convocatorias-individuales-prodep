<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('IAdministrador', FALSE) OR require_once(APPPATH.'libraries/interfaces/IAdministrador.php');

class AdministradorModelo extends CI_model implements IAdministrador{
	
	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }

	public function registrarPersonal($administrador){

	}
	public function editarPersonal($administrador){

	}
	public function obtenerPersonalCorreo($correo){
		$administrador = new Administrador();
    	$consulta = $this->db->get_where('administrador', array('adm_correo'=>$correo));
    	if($consulta->num_rows() > 0){
    		$fila = $consulta->row();
    		$administrador->setIdPersonal($fila->adm_id);
    		$administrador->setNombre($fila->adm_nombre);
    		$administrador->setCorreo($fila->adm_correo);
    		$administrador->setIAdministrador($this);
    	}else{
    		$administrador->setIdPersonal(0);
    	}
    	return $administrador;
	}
    public function obtenerPersonalId($idAdministrador){
        $administrador = new Administrador();
        $consulta = $this->db->get_where('administrador', array('adm_id'=>$idAdministrador));
        if($consulta->num_rows() > 0){
            $fila = $consulta->row();
            $administrador->setIdPersonal($fila->adm_id);
            $administrador->setNombre($fila->adm_nombre);
            $administrador->setCorreo($fila->adm_correo);
            $administrador->setIAdministrador($this);
        }else{
            $administrador->setIdPersonal(0);
        }
        return $administrador;
    }
}