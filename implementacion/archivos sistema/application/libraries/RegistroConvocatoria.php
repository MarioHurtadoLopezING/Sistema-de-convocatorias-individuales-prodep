<?php
class RegistroConvocatoria{
	private $idRegistroCOnvocatoria;
	private $anoConvocatoria;
	private $estado;
	private $fechaVoBo;
	private $proyecto;
	private $becario;
	private $fechaInicioBecario;
	private $iRegistroConvocatoria;


    public function __construct(){
        
    }

	public function getIdRegistroCOnvocatoria(){
		return $this->idRegistroCOnvocatoria;
	}

	public function setIdRegistroCOnvocatoria($idRegistroCOnvocatoria){
		$this->idRegistroCOnvocatoria = $idRegistroCOnvocatoria;
	}

	public function getAnoConvocatoria(){
		return $this->anoConvocatoria;
	}

	public function setAnoConvocatoria($anoConvocatoria){
		$this->anoConvocatoria = $anoConvocatoria;
	}

	public function setFechaInicioBecario($fechaInicioBecario){
		$this->fechaInicioBecario = $fechaInicioBecario;
	}
	public function getFechaInicioBecario(){
		return $this->fechaInicioBecario;
	}
	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getFechaVoBo(){
		return $this->fechaVoBo;
	}

	public function setFechaVoBo($fechaVoBo){
		$this->fechaVoBo = $fechaVoBo;
	}

	public function getProyecto(){
		return $this->proyecto;
	}

	public function setProyecto($proyecto){
		$this->proyecto = $proyecto;
	}

	public function getBecario(){
		return $this->becario;
	}

	public function setBecario($becario){
		$this->becario = $becario;
	}

	public function getIRegistroConvocatoria(){
		return $this->IRegistroConvocatoria;
	}

	public function setIRegistroConvocatoria($iRegistroConvocatoria){
		$this->iRegistroConvocatoria = $iRegistroConvocatoria;
	}

	public function registrarConvocatoria(){
		return $this->iRegistroConvocatoria->registrarConvocatoria($this);
	}

	public function obtenerconvocatorias(){
		return $this->iRegistroConvocatoria->obtenerconvocatorias();
	}

	public function obtenerConvocatoria($idConvocatoria){
		return $this->iRegistroConvocatoria->obtenerConvocatoria($idConvocatoria);
	}
	public function editarConvocatoria(){
		return $this->iRegistroConvocatoria->editarConvocatoria($this);
	}
}