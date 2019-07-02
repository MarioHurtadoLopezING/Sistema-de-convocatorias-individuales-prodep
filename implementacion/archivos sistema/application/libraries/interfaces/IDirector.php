<?php
interface IDirector{
	
    public function registrarPersonal($director);
    public function editarPersonal($director);
    public function obtenerPersonalCorreo($correo);
}