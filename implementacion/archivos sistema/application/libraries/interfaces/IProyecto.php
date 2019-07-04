<?php

interface IProyecto{

	public function registrar($proyecto);
    public function editar($proyecto);
    public function cambiarEstado($estado);
    public function obtenerProyectos();
    public function obtenerProyecto($idProyecto);
}