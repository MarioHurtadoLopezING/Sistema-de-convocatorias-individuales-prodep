<script>
	var base_url = "<?php echo site_url();?>";
</script>
<link rel="stylesheet" href="<?=base_url('css/consultarProyectos_style.css');?>" type="text/css">
<script type="text/javascript" src="<?php echo base_url(); ?>js/consultaProyectos.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/objetos.js"></script> 

	<div class="contenido center">
		<div class="margin-sup">
			<form>
				<span>Buscar proyecto:</span>
				<input type="input" name="" placeholder="Nombre docente / número proyecto..." class="textbox tamano">
				<input type="submit" name="buscar" value="Buscar" class="btn btn-success">
			</form>
		</div>
		<div class="scrollProyectos" id="scrollProyectos">
		</div>
	</div>
</body>
</html>