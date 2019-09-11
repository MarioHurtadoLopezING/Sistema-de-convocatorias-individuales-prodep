<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('IDocente', FALSE) OR require_once(APPPATH.'libraries/interfaces/IDocente.php');

class DocenteModelo extends CI_Model implements IDocente{

	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }

	public function registrarPersonal($docente){

	}
    
    public function editarPersonal($docente){

    }

    public function obtenerPersonalCorreo($correo){
    	$docente = new Docente();
    	$consulta = $this->db->get_where('docente',array('doc_correo'=>$correo));
    	if($consulta->num_rows() > 0){
    		$fila = $consulta->row();
    		$docente->setIdPersonal($fila->doc_id);
    		$docente->setNombre($fila->doc_nombre);
    		$docente->setCorreo($fila->doc_correo);
    		$docente->setNumeroPersonal($fila->doc_numeroPersonal);
    		$docente->setIDocente($this);
    	}else{
    		$docente->setIdPersonal(0);
    	}
    	return	$docente;
    }

    public function obtenerPersonalNumeroregistro($numeroPersonal){

    }
    public function obtenerPersonalId($idPersonal){
        $docente = new Docente();
        $consulta = $this->db->get_where('docente',array('doc_id'=>$idPersonal));
        if($consulta->num_rows() > 0){
            $fila = $consulta->row();
            $docente->setIdPersonal($fila->doc_id);
            $docente->setNombre($fila->doc_nombre);
            $docente->setCorreo($fila->doc_correo);
            $docente->setNumeroPersonal($fila->doc_numeroPersonal);
            $docente->setIDocente($this);
        }else{
            $docente->setIdPersonal(0);
        }
        return  $docente;
    }
    public function obtenerDocentes(){
        $consulta = $this->db->get('docente');
        $docentes = array();
        foreach ($consulta->result() as $row) {
            $docente = array();
            $docente['doc_numeroPersonal'] = $row->doc_numeroPersonal;
            $docente['doc_nombre'] = $row->doc_nombre;
            $docente['doc_correo'] = $row->doc_correo;
            array_push($docentes, $docente);
        }
        return $docentes;
    }
}

