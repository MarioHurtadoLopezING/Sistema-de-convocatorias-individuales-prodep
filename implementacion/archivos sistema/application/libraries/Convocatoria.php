<?php
class Convocatoria{

	private $idConvocatoria;
	private $nombreConvocatoria;
	private $iConvocatoria;

	public function __contruct(){

	}

	public function setIdConvocatoria($idConvocatoria){
		$this->idConvocatoria = $idConvocatoria;
	}

	public function getIdConvocatoria(){
		return $this->idConvocatoria;
	}

	public function setNombreConvocatoria($nombreConvocatoria){
		$this->nombreConvocatoria = $nombreConvocatoria;
	}

	public function getNombreConvocatoria(){
		return $this->nombreConvocatoria;
	}

	public function setIConvocatoria($iConvocatoria){
		$this->iConvocatoria = $iConvocatoria;
	}

	public function registrar(){
		return $this->iConvocatoria->registrar($this);
	}

	public function editar(){
		return $this->iConvocatoria->editar($this);
	}

	public function obtenerConvocatorias(){
		return $this->iConvocatoria->obtenerConvocatorias();
	}
}