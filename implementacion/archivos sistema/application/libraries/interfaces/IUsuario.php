<?php
interface IUsuario{
	public function registrarUsuario($usuario);
    public function modificar($usuario);
    public function iniciarSesion($nombreUsuario,$contrasena);
}