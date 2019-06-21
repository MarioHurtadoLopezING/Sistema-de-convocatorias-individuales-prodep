<?php
class Region{

    private $idRegion;
    private $nombre;
    private $iRegion;

    public function __contruct(){

    }
    public function getIdRegion(){
        return $this->idRegion;
    }
    
    public function setIdRegion($idRegion){
        $this->idRegion = $idRegion;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setIRegion($iRegion){
        $this->iRegion = $iRegion;
    }

    public function getIRegion(){
        return $this->iRegion;
    }

    public function registrar(){
        return $this->iRegion->registrar($this);
    }

    public function editar(){
        return $this->iRegion->editar($this);
    }
    public function obtenerRegiones(){
        return $this->iRegion->obtenerRegiones();
    }
}