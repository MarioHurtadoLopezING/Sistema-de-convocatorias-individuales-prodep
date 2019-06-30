<?php
interface IDocente{
	
    public function registrarPersonal();
    public function editarPersonal();
    public function obtenerPersonalCorreo($correo);
    public function obtenerPersonalNumeroregistro($numeroPersonal);
}