<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
interface_exists('iConvocatoria', FALSE) OR require_once(APPPATH.'libraries/interfaces/IRegistroConvocatoria.php');

class RegistroConvocatoriaModelo extends CI_Model implements IRegistroConvocatoria{
	
	public function __get($attr) {
        return CI_Controller::get_instance()->$attr;
    }

    public function __construct(){
    	$this->load->database('prodep');
    }

	public function registrarConvocatoria($registroConvocatoria){
		$data = array(
			'reg_anoConvocatoria'=> $registroConvocatoria->getAnoConvocatoria(),
			'reg_estado'=> $registroConvocatoria->getEstado(),
			'reg_fechaVoBo'=> $registroConvocatoria->getFechaVoBo(),
			'pro_id'=> $registroConvocatoria->getProyecto(),
			'bec_id'=> $registroConvocatoria->getBecario(),
			'reg_fechaInicioBecario' =>$registroConvocatoria->getFechaInicioBecario()
		);
		return array('estado'=> $this->db->insert('registroConvocatoria',$data),'idRegistroConvocatoria'=>$this->db->insert_id());
	}

	public function obtenerconvocatorias(){
		$this->db->select('registroconvocatoria.reg_id, 
			registroconvocatoria.reg_anoConvocatoria,
			registroconvocatoria.reg_estado,
		    registroconvocatoria.reg_fechaVoBo,
		    proyecto.pro_claveProgramtica,
		    proyecto.pro_folioProdep,
		    proyecto.pro_id,
		    docente.doc_id,
		    docente.doc_nombre,
		    docente.doc_numeroPersonal');
		$this->db->from('registroconvocatoria');
		$this->db->join('proyecto','registroconvocatoria.pro_id = proyecto.pro_id','inner');
		$this->db->join('docente','proyecto.doc_id = docente.doc_id','inner');
		$consulta = $this->db->get();
		$convocatorias = array();
    	foreach ($consulta->result() as $row) {
    		$convocatoria = array();
    		$convocatoria['reg_id'] = $row->reg_id;
    		$convocatoria['reg_anoConvocatoria'] = $row->reg_anoConvocatoria;
    		$convocatoria['reg_estado'] = $row->reg_estado;
    		$convocatoria['reg_fechaVoBo'] = $row->reg_fechaVoBo;
    		$convocatoria['proyecto']['pro_claveProgramtica'] = $row->pro_claveProgramtica;
    		$convocatoria['proyecto']['pro_folioProdep'] = $row->pro_folioProdep;
    		$convocatoria['proyecto']['pro_id'] = $row->pro_id;
    		$convocatoria['docente']['doc_id'] = $row->doc_id;
			$convocatoria['docente']['doc_nombre'] = $row->doc_nombre;
			$convocatoria['docente']['doc_numeroPersonal'] = $row->doc_numeroPersonal;
			array_push($convocatorias, $convocatoria);
    	}
    	return $convocatorias;
	}
	public function obtenerConvocatoria($idConvocatoria){
		$this->db->select('registroconvocatoria.reg_anoConvocatoria,
		    registroconvocatoria.reg_fechaVoBo,
		    registroconvocatoria.reg_fechaInicioBecario,
		    registroconvocatoria.reg_estado,
		    becario.bec_id,
		    becario.bec_nombre,
		    docente.doc_id,
			docente.doc_nombre,
			proyecto.pro_id');
		$this->db->join('proyecto','registroconvocatoria.pro_id = proyecto.pro_id','inner');
		$this->db->join('docente','proyecto.pro_id = docente.doc_id','inner');
		$this->db->join('becario','registroconvocatoria.bec_id = becario.bec_id','inner');
		$consulta = $this->db->get_where('registroconvocatoria',array('registroconvocatoria.reg_id'=>$idConvocatoria));
		$convocatoria = array();
		if($consulta->num_rows() > 0){
			$row = $consulta->row();
			$convocatoria['reg_anoConvocatoria']=$row->reg_anoConvocatoria;
			$convocatoria['reg_fechaVoBo']=$row->reg_fechaVoBo;
			$convocatoria['reg_fechaInicioBecario']=$row->reg_fechaInicioBecario;
			$convocatoria['reg_estado']=$row->reg_estado;
			$convocatoria['bec_id']=$row->bec_id;
			$convocatoria['bec_nombre']=$row->bec_nombre;
			$convocatoria['doc_id']=$row->doc_id;
			$convocatoria['doc_nombre']=$row->doc_nombre;
			$convocatoria['pro_id']=$row->pro_id;
		}
		return $convocatoria;
	}

	public function editarConvocatoria($convocatoria){
		$data = array(
			'reg_anoConvocatoria' => $convocatoria->getAnoConvocatoria(),
			'reg_estado' => $convocatoria->getEstado(),
			'reg_fechaVoBo' => $convocatoria->getFechaVoBo(),
			'pro_id' => $convocatoria->getProyecto(),
			'bec_id' => $convocatoria->getBecario(),
			'reg_fechaInicioBecario' =>$convocatoria->getFechaInicioBecario());
		$this->db->where('reg_id', $convocatoria->getIdRegistroConvocatoria());
		return $this->db->update('registroConvocatoria',$data);
	}
}





