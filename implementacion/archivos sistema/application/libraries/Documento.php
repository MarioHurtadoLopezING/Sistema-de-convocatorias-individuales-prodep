<?php
class Documento{

	private $idDocumento;
	private $nombre;
	private $estado;
	private $registroConvocatoria;
	private $iDocumento;

	public function __construct(){

    }

    public function getIdDocumento(){
		return $this->idDocumento;
	}

	public function setIdDocumento($idDocumento){
		$this->idDocumento = $idDocumento;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getRegistroConvocatoria(){
		return $this->registroConvocatoria;
	}

	public function setRegistroConvocatoria($registroConvocatoria){
		$this->registroConvocatoria = $registroConvocatoria;
	}

	public function getIDocumento(){
		return $this->iDocumento;
	}

	public function setIDocumento($iDocumento){
		$this->iDocumento = $iDocumento;
	}

	public function registrarDocumento(){
		return $this->iDocumento->registrarDocumento($this);
	}
	public function obtenerDocumentos($idRegistroConvocatoria){
		return $this->iDocumento->obtenerDocumentos($idRegistroConvocatoria);
	}
	public function editarDocumento(){
		return $this->iDocumento->editarDocumento($this);
	}
}