<?php
class Destinatario{

	private $idDestinatario;
	private $nombre;

	public function __construct(){

	}

	public function getIdDestinatario(){
		retun $this->idDestinatario;
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
	public function registrar(){

	}
	public function editar(){
		
	}
}