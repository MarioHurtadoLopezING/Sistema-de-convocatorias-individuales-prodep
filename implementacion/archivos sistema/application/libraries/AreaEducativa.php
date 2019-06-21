<?php
class AreaEducativa{

    private $idEntidadEducativa;
    private $nombre;
    private $iAreaEducativa;

    public function __construct(){

    }

    public function getIdEntidadEducativa(){
        return $this->idEntidadEducativa;
    }

    public function setIdEntidadEducativa(){
        return $this->idEntidadEducativa;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setIAreaEducativa($iAreaEducativa){
        $this->iAreaEducativa = $iAreaEducativa;
    }

    public function registrar(){
        return $this->iAreaEducativa->registrar($this);
    }
    public function editar(){
        return $this->iAreaEducativa->editar($this);
    }

    public function obtenerAreas(){
        return $this->iAreaEducativa->obtenerAreas();
    }
}