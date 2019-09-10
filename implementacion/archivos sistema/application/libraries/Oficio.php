<?php
class Oficio{
	private $idOficio;
	private $numeroOficio;
	private $folioProdep;
	private $asunto;
	private $monto;
	private $fechaEnvio;
	private $fechaRespuesta;
	private $aprobado;
	private $destinatario;
	private $convocatoria;
	private $proyecto;
	private $IOficio;
	private $anoConvocatoria;

	 public function __construct(){
        
    }

    	public function getIdOficio(){
		return $this->idOficio;
	}

	public function setIdOficio($idOficio){
		$this->idOficio = $idOficio;
	}

	public function getNumeroOficio(){
		return $this->numeroOficio;
	}

	public function setNumeroOficio($numeroOficio){
		$this->numeroOficio = $numeroOficio;
	}

	public function getFolioProdep(){
		return $this->folioProdep;
	}

	public function setFolioProdep($folioProdep){
		$this->folioProdep = $folioProdep;
	}

	public function getAsunto(){
		return $this->asunto;
	}

	public function setAsunto($asunto){
		$this->asunto = $asunto;
	}

	public function getMonto(){
		return $this->monto;
	}

	public function setMonto($monto){
		$this->monto = $monto;
	}

	public function getFechaEnvio(){
		return $this->fechaEnvio;
	}

	public function setFechaEnvio($fechaEnvio){
		$this->fechaEnvio = $fechaEnvio;
	}

	public function getFechaRespuesta(){
		return $this->fechaRespuesta;
	}

	public function setFechaRespuesta($fechaRespuesta){
		$this->fechaRespuesta = $fechaRespuesta;
	}

	public function getAprobado(){
		return $this->aprobado;
	}

	public function setAprobado($aprobado){
		$this->aprobado = $aprobado;
	}

	public function getDestinatario(){
		return $this->destinatario;
	}

	public function setDestinatario($destinatario){
		$this->destinatario = $destinatario;
	}

	public function getConvocatoria(){
		return $this->convocatoria;
	}

	public function setConvocatoria($convocatoria){
		$this->convocatoria = $convocatoria;
	}

	public function getProyecto(){
		return $this->proyecto;
	}

	public function setProyecto($proyecto){
		$this->proyecto = $proyecto;
	}
	public function getIOficio(){
		return $this->IOficio;
	}

	public function setIOficio($IOficio){
		$this->IOficio = $IOficio;
	}
	public function getAnoConvocatoria(){
		return $this->anoConvocatoria;
	}
	public function setAnoConvocatoria($anoConvocatoria){
		$this->anoConvocatoria = $anoConvocatoria;
	}
	public function registrarOficio(){
		return $this->IOficio->registrarOficio($this);
	}
	public function editarOficio(){
		return $this->IOficio->editarOficio($this);
	}
	public function obtenerOficios(){
		return $this->IOficio->obtenerOficios();
	}
	public function obtenerOficio($idOficio){
		return $this->IOficio->obtenerOficio($idOficio);
	}
}