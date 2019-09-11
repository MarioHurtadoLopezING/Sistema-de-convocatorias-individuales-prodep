

<link rel="stylesheet" href="<?=base_url('css/consultarProyectos_style.css');?>" type="text/css">
<script type="text/javascript" src="<?php echo base_url(); ?>js/consultarDirectores.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/buscador.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script>
	var base_url = "<?php echo site_url();?>";
</script>
	<div class="contenido center">
		<div class="margin-sup">
			<form id="formDirector">
				<span class="esconder">Buscar director:</span>
				<input type="input" name="" placeholder="Número de personal del director / correo" class="textbox tamano">
				
				<button type="button" name="buscar" value="Buscar" class="btn btn-success" onclick="searchPrompt('', false)">Buscar</button>
			</form>

		</div>
		<div class="scrollProyectos" id="scrollDocentes">
		</div>
	</div>
</body>

</html>
