	<script>
		var base_url = "<?php echo site_url();?>";
		var idOficio = "<?php echo($idOficio) ?>";
	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/objetos.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>js/registroOficios.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>js/editarOficio.js"></script> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<div class="contenido center">
		<form class="margin-sup" id="editarOficio">
			<div class="margin">
				<span class="etiqueta esconder">Oficio UV:</span>
				<input type="text" name="numeroOficio" placeholder="Número de oficio" class="textbox tamano" id="numeroOficio" required>	
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Destinatario:</span>
				<select  class="textbox tamano" id="comboDestinatario">
				</select>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Proyecto:</span>
				<input type="text" name="folioProdep" placeholder="Número de fólio PRODEP" class="textbox tamanoBtn" id="folioProdep" required>
				<input type="hidden" name="idProyecto" value="" id="idProyecto">
				<button type="button" name="buscar" value="" class="btn btn-warning" id="buscarDocente">Buscar</button>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Convocatoria:</span>
				<select  class="textbox tamano" id="comboConvocatorias">
				</select>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Clave PRODEP:</span>
				<input type="text" name="claveProdep" placeholder="Clave PRODEP" class="textbox tamano" id="claveProdep" required>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Asunto:</span>
				<textarea rows="3" name="asunto" style="overflow:auto;" class="textbox tamano" id="asunto" placeholder="Asunto" required></textarea>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Monto:</span>
				<input type="text" name="monto" placeholder="Monto" class="textbox tamano" id="monto" required>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Año convocatoria:</span>
				<input type="date" name="añoConvocatoria" placeholder="Año convocatoria" class="textbox tamano" id="anoConvocatoria" required>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Fecha envío:</span>
				<input type="date" name="monto" placeholder="Monto" class="textbox tamano" id="fechaEnvio" required>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Fecha respuesta:</span>
				<input type="date" name="monto" placeholder="Monto" class="textbox tamano" id="fechaRespuesta">
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Aprobado:</span>
				<h3 style="display: inline-block;" class="tamano"><input type="checkbox" name="aprobado" placeholder="Monto" class="textbox" id="aprobado"> Oficio aprobado</h3>
			</div>
			<div class="margin">
				<input type="submit" name="" value="Registrar" class="btn boton margin btn-success">
				<a href="<?=base_url();?>index.php/OficioController/vista/consultarOficios"><button type="button" name="" value="" class="btn boton margin btn-danger">Cancelar</button></a>
			</div>
		</form>
	</div>
</body>
</html>