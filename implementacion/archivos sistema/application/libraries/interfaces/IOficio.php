<?php

interface IOficio{
	public function registrarOficio($oficio);
	public function editarOficio($oficio);
	public function obtenerOficios();
	public function obtenerOficio($idOficio);
}