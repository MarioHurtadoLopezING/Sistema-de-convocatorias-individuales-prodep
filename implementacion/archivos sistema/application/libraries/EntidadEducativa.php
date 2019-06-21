<?php
class EntidadEducativa{
    
    private $idEntidadEducativa;
    private $nombre;
    private $iEntidadEducativa;
    
    public function __construct(){
        
    }

    public function setIdEntidadEducativa($idEntidadEducativa){
        $this->idEntidadEducativa = $idEntidadEducativa;
    }

    public function getIdEntidadEducativa(){
        return $this->idEntidadEducativa;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function getNombre(){
        return $this->nombre;
    }

    public function setIEntidadEducativa($iEntidadEducativa){
        $this->iEntidadEducativa = $iEntidadEducativa;
    }

    public function registrar(){
        $this->iEntidadEducativa->registrar($this);
    }

    public function editar(){
        $this->iEntidadEducativa->editar($this);
    }

}