<?php
interface IDocente{
	
    public function registrarPersonal($docente);
    public function editarPersonal($docente);
    public function obtenerPersonalCorreo($correo);
    public function obtenerPersonalNumeroregistro($numeroPersonal);
    public function obtenerPersonalId($idPersonal);
}