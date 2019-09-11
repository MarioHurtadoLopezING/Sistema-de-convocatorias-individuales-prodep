<script>
	var base_url = "<?php echo site_url();?>";
</script>
<link rel="stylesheet" href="<?=base_url('css/consultarProyectos_style.css');?>" type="text/css">
<script type="text/javascript" src="<?php echo base_url(); ?>js/consultarDocentes.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/buscador.js"></script> 
	<div class="contenido center">
		<div class="margin-sup">
			<form id="buscar">
				<span>Buscar docente:</span>
				<input type="input" name="" placeholder="Número de personal del docente / correo" class="textbox tamano" id="texto">
				<button type="button" name="buscar" value="Buscar" class="btn btn-success" onclick="searchPrompt('', false)">Buscar</button>
			</form>
		</div>
		<div class="scrollProyectos" id="scrollDocentes">
		</div>
	</div>
</body>
</html>
