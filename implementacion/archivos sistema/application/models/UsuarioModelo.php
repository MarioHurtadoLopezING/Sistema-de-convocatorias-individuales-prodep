<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('IUsuario', FALSE) OR require_once(APPPATH.'libraries/interfaces/IUsuario.php');

class UsuarioModelo extends CI_Model implements IUsuario{
	
	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }

	public function registrarUsuario($usuario){
		$personal = $usuario->getPersonal();
		$data = array(
			'usu_id' => 0,
			'usu_nombre'=>$usuario->getNombre(),
			'usu_contrasena'=>$usuario->getContrasena(),
			'per_id'=>$personal->getIdPersonal()
		);
		return $this->db->insert('usuario',$data);
	}
    public function modificar($usuario){

    }
    public function iniciarSesion($nombreUsuario,$contrasena){
    	$usuario = new Usuario();
    	$consulta = $this->db->get_where('usuario',array('usu_nombre'=>$nombreUsuario, 'usu_contrasena' => $contrasena));
    	if($consulta->num_rows() > 0){
    		$fila = $consulta->row();
    		$usuario->setIdUsuario($fila->usu_id);
    		$usuario->setNombre($fila->usu_nombre);
    		$usuario->setContrasena($fila->usu_contrasena);
    		$usuario->setPersonal($fila->per_id);
    		$usuario->setIUsuario($this);
    	}else{
	    	$usuario->setIdUsuario(0);
    	}
    	return $usuario;
    }
}