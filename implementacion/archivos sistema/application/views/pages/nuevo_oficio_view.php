	<script>var base_url = "<?php echo site_url();?>";</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/objetos.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>js/registroOficios.js"></script> 
	<div class="contenido center">
		<form class="margin-sup" id="nuevoOficio">
			<div class="margin">
				<span class="etiqueta esconder">Oficio UV:</span>
				<input type="text" name="oficioUV" placeholder="Oficio UV" class="textbox tamano" id="oficioUV" required>	
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Destinatario:</span>
				<select  class="textbox tamano" id="comboDestinatario">
				</select>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Número proyecto:</span>
				<input type="text" name="folioProdep" placeholder="Número de folio PRODEP" class="textbox tamanoBtn" id="folioProdep" required>
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
				<textarea rows="5" name="asunto" style="overflow:auto;" class="textbox tamano" id="asunto" placeholder="Asunto" required></textarea>
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
				<input type="submit" name="" value="Registrar" class="btn boton margin btn-success">
				<a href="<?=base_url();?>index.php/OficioController/vista/consultarOficios"><button type="button" name="" value="" class="btn boton margin btn-danger">Cancelar</button></a>
			</div>
		</form>
	</div>
</body>
</html>