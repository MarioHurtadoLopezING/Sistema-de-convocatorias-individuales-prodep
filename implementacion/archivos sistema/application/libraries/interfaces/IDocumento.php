<?php
interface IDocumento{
	public function registrarDocumento($documento);
	public function obtenerDocumentos($idRegistroConvocatoria);
	public function editarDocumento($documento);
}