<?php
class EntidadEducativa{
    
    private $idEntidadEducativa;
    private $nombre;
    
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

    public function registrar(){

    }

    public function editar(){

    }

}