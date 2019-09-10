<script>
	var base_url = "<?php echo site_url();?>";
</script>
<link rel="stylesheet" href="<?=base_url('css/consultarProyectos_style.css');?>" type="text/css">
<script type="text/javascript" src="<?php echo base_url(); ?>js/objetos.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/consultarConvocatorias.js"></script> 

	<div class="contenido center">
		<div class="margin-sup">
			<form>
				<span>Buscar convocatoria:</span>
				<input type="input" name="" placeholder="Número de personal del docente / correo" class="textbox tamano">
				
				<input type="submit" name="buscar" value="Buscar" class="btn btn-success">
			</form>
		</div>
		<div class="scrollProyectos" id="scrollConvocatorias">
		</div>
	</div>
	<div class="modal fade" tabindex="-1" role="dialog" id="modalConsultaConvocatorias">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Datos de la convocatoria</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="bodyModalConvocatoria">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>