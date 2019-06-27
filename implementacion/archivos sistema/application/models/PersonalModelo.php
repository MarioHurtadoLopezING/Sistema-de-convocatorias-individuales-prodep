<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('IUsuario', FALSE) OR require_once(APPPATH.'libraries/interfaces/IPersonal.php');

class PersonalModelo implements IPersonal{
	
 	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }
	public function registrar($personal){
		$data = array(
			'per_id' => 0,
			'per_nombre' => $personal->getNombre(),
			'per_correo' => $personal->getCorreo(),
			'per_rol' => $personal->getRol()
		);
		return $this->db->insert('personal',$data);
	}
    
    public function modificar($personal){

    }
    public function obtenerPersonalCorreo($correo){
    	$personal = new Personal();
    	$consulta = $this->db->get_where('personal',array('per_correo'=>$correo));
    	if($consulta->num_rows() > 0){
    		$fila = $consulta->row();
    		$personal->setIdPersonal($fila->per_id);
    		$personal->setNombre($fila->per_nombre);
    		$personal->setCorreo($fila->per_correo);
    		$personal->setRol($fila->per_rol);
    		$personal->setIPersonal($this);
    	}else{
	    	$personal->setIdPersonal(0);
    	}
    	return $personal;
    }
}