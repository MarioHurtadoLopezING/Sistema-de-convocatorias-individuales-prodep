		<script>
			var base_url = "<?php echo site_url();?>";
			var idProyecto = "<?php echo($idProyecto) ?>";
			console.log(idProyecto);
		</script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/objetos.js"></script> 
		<script type="text/javascript" src="<?php echo base_url(); ?>js/editarProyecto.js"></script> 
		<style type="text/css">
			.margin-superior{
				margin-top: 3em;
			}
		</style>
		<div class="contenido center">
			<form class="margin-superior" id="editarProyecto">
			<div class="margin">
				<span class="etiqueta esconder">Docente:</span>
				<input type="text" name="correoDocente" placeholder="Correo personal del docente" class="textbox tamanoBtn" id="correoDocente" required>
				<input type="hidden" name="idDocente" value="" id="idDocente">
				<button type="button" name="buscar" value="" class="btn btn-warning" id="buscarDocente">Buscar</button>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Región:</span>
				<select class="textbox tamano" id="comboRegion">
				</select>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Área:</span>
				<select  class="textbox tamano" id="comboArea">
				</select>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Entidad:</span>
				<select  class="textbox tamano" id="comboEntidades">
				</select>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Convocatoria:</span>
				<select  class="textbox tamano" id="comboConvocatorias">
				</select>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Director:</span>
				<input type="text" name="" placeholder="Correo del director"  class="textbox tamanoBtn" id="correoDirector" required>
				<input type="hidden" name="idDirector" value="" id="idDirector">
				<button type="button" name="buscar" value="" class="btn btn-warning" id="buscarDirector">Buscar</button>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Administración:</span>
				<input type="text" name="" placeholder="Correo del administrador" class="textbox tamanoBtn" id="correoAdministrador"required>
				<input type="hidden" name="idAdministrador" value="" id="idAdministrador">
				<button type="button" name="" value="Buscar" class="btn btn-warning" id="buscarAdministrador">Buscar</button>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Inicio del apoyo:</span>
				<input type="date" name=""  class="textbox tamano" id="fechaInicioApoyo" required>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Fólio PRODEP:</span>
				<input type="text" name="" placeholder="folio del documento PRODEP"  class="textbox tamano" id="folioProdep" required>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Clave programática</span>
				<input type="text" name="" placeholder="Clave programática"  class="textbox tamano" id="claveProgramatica" required>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Oficio de autorización:</span>
				<input type="text" name="" placeholder="Oficio de autorización"  class="textbox tamano" id="oficioAutorizacion" required>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Número de dependencia:</span>
				<input type="text" name="" placeholder="Número de dependencia"  class="textbox tamano" id="numeroDependencia" required>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Fecha fin de apoyo:</span>
				<input type="date" name=""  class="textbox tamano" id="fechaFinApoyo">
			</div>
			<div class="margin">
				<input type="submit" name="" value="Guardar" class="btn boton margin btn-success">
				<a href="<?=base_url();?>index.php/ProyectoController/vista/consultarProyectos"><button type="button" name="" value="" class="btn boton margin btn-danger">Cancelar</button></a>
			</div>
		</form>
		</div>
	</body>
</html>