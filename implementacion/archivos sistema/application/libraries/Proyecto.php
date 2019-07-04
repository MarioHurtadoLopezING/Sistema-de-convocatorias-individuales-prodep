<?php

class Proyecto{
	private $idProyecto;#
	private $claveProgramatica;#
	private $folioProdep;#
	private $oficioAutorizacion;#
	private $inicioApoyo;#
	private $estado;#
	private $numeroDependencia;
	private $docente;
	private $administrador;
	private $director;
	private $entidadEducativa;
	private $personal;
	private $areaEducativa;
	private $region;
	private $convocatoria;
	private $iProyecto;

    public function __construct(){
        
    }	

    public function getIdProyecto(){
		return $this->idProyecto;
	}

	public function setIdProyecto($idProyecto){
		$this->idProyecto = $idProyecto;
	}

	public function getClaveProgramatica(){
		return $this->claveProgramatica;
	}

	public function setClaveProgramatica($claveProgramatica){
		$this->claveProgramatica = $claveProgramatica;
	}

	public function getFolioProdep(){
		return $this->folioProdep;
	}

	public function setFolioProdep($folioProdep){
		$this->folioProdep = $folioProdep;
	}

	public function getOficioAutorizacion(){
		return $this->oficioAutorizacion;
	}

	public function setOficioAutorizacion($oficioAutorizacion){
		$this->oficioAutorizacion = $oficioAutorizacion;
	}

	public function getInicioApoyo(){
		return $this->inicioApoyo;
	}

	public function setInicioApoyo($inicioApoyo){
		$this->inicioApoyo = $inicioApoyo;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getNumeroDependencia(){
		return $this->numeroDependencia;
	}

	public function setNumeroDependencia($numeroDependencia){
		$this->numeroDependencia = $numeroDependencia;
	}

	public function getDocente(){
		return $this->docente;
	}

	public function setDocente($docente){
		$this->docente = $docente;
	}

	public function getAdministrador(){
		return $this->administrador;
	}

	public function setAdministrador($administrador){
		$this->administrador = $administrador;
	}

	public function getDirector(){
		return $this->director;
	}

	public function setDirector($director){
		$this->director = $director;
	}

	public function getEntidadEducativa(){
		return $this->entidadEducativa;
	}

	public function setEntidadEducativa($entidadEducativa){
		$this->entidadEducativa = $entidadEducativa;
	}

	public function getPersonal(){
		return $this->personal;
	}

	public function setPersonal($personal){
		$this->personal = $personal;
	}

	public function getAreaEducativa(){
		return $this->areaEducativa;
	}

	public function setAreaEducativa($areaEducativa){
		$this->areaEducativa = $areaEducativa;
	}

	public function getRegion(){
		return $this->region;
	}

	public function setRegion($region){
		$this->region = $region;
	}

	public function getConvocatoria(){
		return $this->convocatoria;
	}

	public function setConvocatoria($convocatoria){
		$this->convocatoria = $convocatoria;
	}

	public function getIProyecto(){
		return $this->iProyecto;
	}

	public function setIProyecto($iProyecto){
		$this->iProyecto = $iProyecto;
	}

    public function registrar(){
    	return $this->iProyecto->registrar($this);
    }

    public function editar(){
    	return $this->iProyecto->editar($this);
    }

    public function cambiarEstado(){

    }

    public function obtenerProyectos(){
    	return $this->iProyecto->obtenerProyectos();
    }
    public function obtenerProyecto($idProyecto){
    	return $this->iProyecto->obtenerProyecto($idProyecto);
    }
}