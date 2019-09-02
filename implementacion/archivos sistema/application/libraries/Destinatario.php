<?php
class Destinatario{

	private $idDestinatario;
	private $nombre;
	private $iDestinatario;

	public function __construct(){

	}

	public function getIdDestinatario(){
		return $this->idDestinatario;
	}

	public function setIdDestinatario($idDestinatario){
		$this->idDestinatario = $idDestinatario;
	}

	public function getNombre(){
		return $this->nombre;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	
	public function setIDestinatario($iDestinatario){
		$this->iDestinatario = $iDestinatario;
	}

	public function getIDestionatario(){
		return $this->iDestinatario;
	}

	public function obtenerDestinatarios(){
		return $this->iDestinatario->obtenerDestinatarios();
	}
	public function registrar(){
		return $this->iDestinatario->registrar($this);
	}
	public function editar(){
		return $this->iDestinatario->editar($this);
	}
}