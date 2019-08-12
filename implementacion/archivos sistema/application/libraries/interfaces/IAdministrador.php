<?php
interface IAdministrador{

	public function registrarPersonal($administrador);
    public function editarPersonal($administrador);
    public function obtenerPersonalCorreo($correo);
    public function obtenerPersonalId($idPersonal);
}