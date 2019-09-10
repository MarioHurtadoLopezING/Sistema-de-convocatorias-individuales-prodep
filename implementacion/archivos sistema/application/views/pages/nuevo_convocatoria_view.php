<script type="text/javascript">var base_url = "<?php echo site_url();?>";</script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/registroConvocatorias.js"></script> 
	<div class="contenido center">
		<form class="margin-sup" id="nuevoRegistroConvocatoria">
			<div class="margin">
				<span class="etiqueta esconder">Folio PRODEP:</span>
				<input type="text" name="folioProdep" placeholder="Folio PRODEP" class="textbox tamanoBtn" id="folioProdep" required>
				<input type="hidden" name="idProyecto" value="" id="idProyecto">
				<button type="button" name="buscar" value="" class="btn btn-warning" id="buscarProyecto">Buscar</button>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Año:</span>
				<input type="date" name=""  class="textbox tamano" id="anoConvocatoria" required>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Fecha VoBo:</span>
				<input type="date" name=""  class="textbox tamano" id="fechaVoBo" required>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Becario:</span>
				<input type="text" name="becario" placeholder="Correo becario" class="textbox tamanoBtn" id="correoBecario" required>
				<input type="hidden" name="idProyecto" value="" id="idBecario">
				<button type="button" name="buscar" value="" class="btn btn-warning" id="buscarBecario">Buscar</button>
			</div>			
			<div class="margin">
				<span class="etiqueta esconder">Fecha inicio becario:</span>
				<input type="date" name=""  class="textbox tamano" id="fechaIncioBecario" required>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Estado:</span>
				<h4 style="display: inline-block;" class="tamano"><input type="checkbox" name="Entregado" placeholder="Monto" class="textbox" id="aprobado">Convocatoria entregada</h4>
			</div>
			<div class="margin" data-toggle="modal" data-target="#modalDocumentos">
				<a><h4>Añadir documentos</h4></a>
			</div>
			<div class="margin-sup">
				<input type="submit" name="" value="Registrar" class="btn boton margin btn-success">
				<a href="<?=base_url();?>index.php/RegistroConvocatoriaController/vista/consultarRegistrosConvocatorias"><button type="button" name="" value="" class="btn boton margin btn-danger">Cancelar</button></a>
			</div>
		</form>
	</div>
	<div id="modalDocumentos" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title center">Documentos</h3>
				</div>
				<div class="modal-body">
				 	 <div class="margin">
						<h4><input type="checkbox" id="cartaPresentacion">Carta de presentación</h4>
					</div>
					 <div class="margin">
						<h4><input type="checkbox" id="constanciaEstudios">Constancia de estudios</h4>
					</div>
				 	<div class="margin">
						<h4><input type="checkbox" id="actaNacimiento">Acta de nacimiento</h4>
					</div>
					<div class="margin">
						<h4><input type="checkbox" id="credenciaElector">Credencial de elector</h4>
					</div>
					 <div class="margin">
						<h4><input type="checkbox" id="curp">CURP</h4>
					</div>
					 <div class="margin">
						<h4><input type="checkbox" id="rfc">RFC</h4>
					</div>
					 <div class="margin">
						<h4><input type="checkbox" id="cartaCompromiso">Carta compromiso</h4>
					</div>
					 <div class="margin">
						<h4><input type="checkbox" id="numeroCuenta">Número de cuenta</h4>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>