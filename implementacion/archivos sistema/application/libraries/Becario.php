<?php
class Becario{

	private $idBecario;
	private $nombre;
	private $fechaInscripcion;
	private $idBecario;

	public function __contruct(){

	}

	public function setIdBecario($idBecario){
		$this->idBecario = $idBecario;
	}

	public function getIdBecario(){
		return $this->idBecario;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getNombre(){
		return $this->nombre;
	}
	public function setFechaInscripcion($fechaInscripcion){
		$this->fechaInscripcion = $fechaInscripcion;
	}
	public function getFechaInscripcion(){
		return $this->fechaInscripcion;
	}

	public function setIBecario($iBecario){
		$this->iBecario = $iBecario;
	}

	public function getIBecario(){
		return $this->iBecario;
	}

	public function registrar(){
		return $this->iBecario->registrar($this);
	}
	
	public function editar(){
		return $this->iBecario->editar($this);
	}

	public function obtenerBecarioId($idBecario){
		return $this->iBecario->obtenerBecarioId($idBecario);
	}
	public function obtenerBecarios(){
		return $this->iBecario->obtenerBecarios();
	}
}