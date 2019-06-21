<?php
class Becario{

	private $idBecario;
	private $nombre;
	private $fechaInscripcion;

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

	public function registrar(){

	}
	
	public function editar(){

	}
}