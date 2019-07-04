<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('IProyecto', FALSE) OR require_once(APPPATH.'libraries/interfaces/IProyecto.php');

class ProyectoModelo extends CI_Model implements IProyecto{

	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    	$this->load->library('Docente');
        $this->load->library('Proyecto');
    }


	public function registrar($proyecto){
		$data = array(
			'pro_id'=>0,
			'pro_claveProgramtica'=>$proyecto->getClaveProgramatica(),
			'pro_folioProdep'=>$proyecto->getFolioProdep(),
			'pro_oficioAutorizacion'=>$proyecto->getOficioAutorizacion(),
			'pro_inicioApoyo'=>$proyecto->getInicioApoyo(),
			'pro_estado'=>false,
			'pro_numeroDependencia'=>$proyecto->getNumeroDependencia(),
			'doc_id'=>$proyecto->getDocente(),
			'adm_id'=>$proyecto->getAdministrador(),
			'dir_id'=>$proyecto->getDirector(),
			'ent_id'=>$proyecto->getEntidadEducativa(),
			'per_id'=>$proyecto->getPersonal(),
			'are_id'=>$proyecto->getAreaEducativa(),
			'reg_id'=>$proyecto->getRegion(),
			'con_id'=>$proyecto->getConvocatoria()
		);
		return $this->db->insert('proyecto',$data);
	}

    public function editar($proyecto){

    }

    public function cambiarEstado($estado){

    }

    public function obtenerProyectos(){
    	$consulta = $this->db->get('proyecto');
    	$proyectos = array();
    	foreach ($consulta->result() as $row) {
    		$proyecto = array();
    		$proyecto['idProyecto'] = $row->pro_id;
    		$proyecto['docente']['idDocente'] = $row->doc_id;
    		$docente = $this->obtenerDocenteId($row->doc_id);
    		$proyecto['docente']['nombre'] = $docente->getNombre();
    		$proyecto['docente']['numeroPersonal']=$docente->getNumeroPersonal();
    		$proyecto['claveProdep'] = $row->pro_folioProdep;
    		array_push($proyectos, $proyecto);
		}
    	return $proyectos;
    }

    public function obtenerProyecto($idProyecto){
        $proyecto = array();
        $consulta = $this->db->get_where('proyecto',array('pro_id'=>$idProyecto));
        if($consulta->num_rows() > 0){
            $row = $consulta->row();
            $proyecto['IdProyecto'] = $row->pro_id;
            $proyecto['ClaveProgramatica'] = $row->pro_claveProgramtica;
            $proyecto['FolioProdep'] =$row->pro_folioProdep;
            $proyecto['OficioAutorizacion'] = $row->pro_oficioAutorizacion;
            $proyecto['InicioApoyo'] = $row->pro_inicioApoyo;
            $proyecto['Estado'] = $row->pro_estado;
            $proyecto['NumeroDependencia'] = $row->pro_numeroDependencia;
            $proyecto['Docente'] = $row->doc_id;
            $proyecto['Administrador'] = $row->adm_id;
            $proyecto['Director'] = $row->dir_id;
            $proyecto['EntidadEducativa'] = $row->ent_id;
            $proyecto['Personal'] = $row->per_id;
            $proyecto['AreaEducativa'] = $row->are_id;
            $proyecto['Region'] = $row->reg_id;
            $proyecto['Convocatoria'] = $row->con_id;
        }else{
            $proyecto['IdProyecto'] = 0;
        }
        return $proyecto;

    }

    private function obtenerDocenteId($idDocente){
    	$docente = new Docente();
    	$consulta = $this->db->get_where('docente',array('doc_id'=>$idDocente));
    	if($consulta->num_rows() > 0){
    		$fila = $consulta->row();
    		$docente->setNombre($fila->doc_nombre);
    		$docente->setNumeroPersonal($fila->doc_numeroPersonal);
    	}else{
    		$docente->setIdPersonal(0);
    	}
    	return	$docente;
    }

}








