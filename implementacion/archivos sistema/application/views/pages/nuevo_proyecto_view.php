	<script>
		$(document).ready(function(){
			buscarDocente();
		});
		function buscarDocente(){
			$('#buscarDocente').on('click',function (event) {
				var correoDocente = $('#correoDocente').val();
				$.ajax({
					method: "POST",
					async: true,
					cache: false,
					dataType: 'json',
					timeout: 30000,
					url: "<?php echo site_url('DocenteController/obtenerDocente'); ?>",
					data: { 'correo': correoDocente}
				}).done(function(docenteJSON) {
					if(docenteJSON.idDocente > 0){
						$('#correoDocente').val(docenteJSON.nombreDocente);
					}else{
						alert(docenteJSON.mensaje);
					}
				});
			});
		}
	</script>

	<div class="contenido center">
		<form class="margin-sup">
			<div class="margin">
				<span class="etiqueta esconder">Docente:</span>
				<input type="input" name="correoDocente" placeholder="Correo personal del docente" class="textbox tamanoBtn" id="correoDocente">
				<button type="button" name="buscar" value="Buscar" class="btn btn-warning" id="buscarDocente">Buscar</button>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Región:</span>
				<select class="textbox tamano">
					<option>Xalapa</option>
				</select>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Área:</span>
				<select  class="textbox tamano">
					<option>Economico - administrativa</option>
				</select>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Entidad:</span>
				<select  class="textbox tamano">
					<option>Facultad de estadística e informática</option>
				</select>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Convocatoria:</span>
				<select  class="textbox tamano">
					<option>Reconocimiento a perfil deseable y apoyo</option>
				</select>
			</div>
			<div class="margin">
				<form>
					<span class="etiqueta esconder">Director:</span>
					<input type="input" name="" placeholder="Correo del director"  class="textbox tamanoBtn">
					<input type="submit" name="buscar" value="Buscar" class="btn btn-warning">
				</form>
			</div>
			<div class="margin">
				<form>
					<span class="etiqueta esconder">Administración:</span>
					<input type="input" name="" placeholder="Correo del administrador" class="textbox tamanoBtn">
					<input type="submit" name="" value="Buscar" class="btn btn-warning">
				</form>
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Inicio del apoyo:</span>
				<input type="date" name=""  class="textbox tamano">
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Fólio PRODEP:</span>
				<input type="input" name="" placeholder="folio del documento PRODEP"  class="textbox tamano">
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Clave programática</span>
				<input type="input" name="" placeholder="Clave programática"  class="textbox tamano">
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Oficio de autorización:</span>
				<input type="input" name="" placeholder="Oficio de autorización"  class="textbox tamano">
			</div>
			<div class="margin">
				<span class="etiqueta esconder">Número de dependencia:</span>
				<input type="input" name="" placeholder="Número de dependencia"  class="textbox tamano">
			</div>
			<div class="margin">
				<input type="submit" name="" value="Registrar" class="btn boton margin btn-success">
				<input type="submit" name="" value="Cancelar" class="btn boton margin btn-danger">
			</div>
		</form>
	</div>
</body>
</html>