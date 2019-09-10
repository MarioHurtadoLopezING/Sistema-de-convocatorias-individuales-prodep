<?php
class Becario{

	private $idBecario;
	private $nombre;
	private $fechaInscripcion;
	private $correo;
	private $iBecario;
	private $fechaIncioBecario;

	public function __contruct(){

	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}
	public function getCorreo(){
		return $this->correo;
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
	public function getFechaInicioBecario(){
		return $this->fechaIncioBecario;
	}

	public function setFechaInicioBecario($fechaIncioBecario){
		$this->fechaIncioBecario = $fechaIncioBecario;
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
	public function obtenerBecarioCorreo($correo){
		return $this->iBecario->obtenerBecarioCorreo($correo);
	}
}