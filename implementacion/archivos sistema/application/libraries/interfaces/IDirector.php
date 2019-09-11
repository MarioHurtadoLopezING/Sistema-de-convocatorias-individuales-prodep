<?php
interface IDirector{
	
    public function registrarPersonal($director);
    public function editarPersonal($director);
    public function obtenerPersonalCorreo($correo);
    public function obtenerPersonalId($idPersonal);
    public function obtenerDirectores();
}