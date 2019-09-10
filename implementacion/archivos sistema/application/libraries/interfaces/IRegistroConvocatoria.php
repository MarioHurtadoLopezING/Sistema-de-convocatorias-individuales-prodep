<?php
interface IRegistroConvocatoria{
	public function registrarConvocatoria($registroConvocatoria);
	public function obtenerconvocatorias();
	public function obtenerConvocatoria($idConvocatoria);
	public function editarConvocatoria($convocatoria);
}