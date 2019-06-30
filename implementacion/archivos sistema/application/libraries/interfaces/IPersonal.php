<?php
interface IPersonal{
	
    public function registrar($personal);
    public function modificar($personal);
    public function obtenerPersonalCorreo($correo);
    public function obtenerPersonalId($idPersonal);
}