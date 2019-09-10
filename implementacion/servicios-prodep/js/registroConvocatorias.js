$(document).ready(function(){
	buscarDocente();
	buscarBecario();
	$('#nuevoRegistroConvocatoria').submit(function(event){
		event.preventDefault();
		agregarConvocatoria();
	});
});

function buscarDocente(){
	$('#buscarProyecto').on('click',function (event) {
		let folioProdep = $('#folioProdep').val();
		$.ajax({
			method: "POST",
			async: true,
			cache: false,
			dataType: 'json',
			timeout: 30000,
			url: base_url+"/ProyectoController/obtenerProyectoFolioProdep",
			data: { 'folioProdep': folioProdep}
		}).done(function(proyectoJSON) {
			proyectoJSON = proyectoJSON.proyecto;
			if(proyectoJSON.idProyecto > 0){
				$('#idProyecto').val(proyectoJSON.idProyecto);
				buscarNombreDocente(proyectoJSON.docente);
			}else{
				alert(proyectoJSON.mensaje);
			}
		});
	});
}
function buscarNombreDocente(idDocente){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/DocenteController/obtenerDocenteId",
		data: { 'idDocente': idDocente}
	}).done(function(docenteJSON) {
		docenteJSON.idDocente > 0?$('#folioProdep').val(docenteJSON.nombreDocente):alert(docenteJSON.mensaje);
	});
}

function buscarBecario(){
	$('#buscarBecario').on('click', function (event){
		let correoBecario = $('#correoBecario').val();
		$.ajax({
			method: "POST",
			async: true,
			cache: false,
			dataType: 'json',
			timeout: 30000,
			url: base_url+"/BecarioController/obtenerBecario",
			data: { 'correoBecario': correoBecario}
		}).done(function(becarioJSON) {
			if(becarioJSON.idBecario > 0){
				$('#idBecario').val(becarioJSON.idBecario);
				$('#correoBecario').val(becarioJSON.nombre);
			}else{
				alert(becarioJSON.mensaje);
			}
		}).fail(function(event){
			console.log(event);
		});
	});
}
function agregarConvocatoria(){
	var convocatoriaJSON = new Object();
	convocatoriaJSON.idProyecto = $('#idProyecto').val();
	convocatoriaJSON.anoConvocatoria = $('#anoConvocatoria').val();
	$('#aprobado').is(':checked')?convocatoriaJSON.estado = true:convocatoriaJSON.estado = false;
	convocatoriaJSON.fechaVoBo = $('#fechaVoBo').val();
	convocatoriaJSON.fechaIncioBecario = $('#fechaIncioBecario').val();
	convocatoriaJSON.idBecario = $('#idBecario').val();
	convocatoriaJSON = JSON.parse(JSON.stringify(convocatoriaJSON));
	convocatoriaJSON = JSON.stringify(convocatoriaJSON);
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url + "/RegistroConvocatoriaController/registrarConvocatoria",
		data: convocatoriaJSON
	}).done(function(convocatoriaJSON) {
		if(convocatoriaJSON.estado){
			registrarDocumentos(convocatoriaJSON.idRegistroConvocatoria);
			alert('convocatoria registrada');
			$(':text').val('');
			$('#asunto').val('');
		}else{
			alert('la convocatoria no se pudo registrar');
		}
	}).fail(function(event){
		alert('Existe un problema con el registro');
		console.log(event);
	});


	function registrarDocumentos(idRegistroConvocatoria){
		var documentosJSON = new Object();
		$('#cartaPresentacion').is(':checked')?documentosJSON.cartaPresentacion = true:documentosJSON.cartaPresentacion = false;
		$('#constanciaEstudios').is(':checked')?documentosJSON.constanciaEstudios = true:documentosJSON.constanciaEstudios = false;
		$('#actaNacimiento').is(':checked')?documentosJSON.actaNacimiento = true:documentosJSON.actaNacimiento = false;
		$('#credenciaElector').is(':checked')?documentosJSON.credenciaElector = true:documentosJSON.credenciaElector = false;
		$('#curp').is(':checked')?documentosJSON.curp = true:documentosJSON.curp = false;
		$('#rfc').is(':checked')?documentosJSON.rfc = true:documentosJSON.rfc = false;
		$('#cartaCompromiso').is(':checked')?documentosJSON.cartaCompromiso = true:documentosJSON.cartaCompromiso = false;
		$('#numeroCuenta').is(':checked')?documentosJSON.numeroCuenta = true:documentosJSON.numeroCuenta = false;
		documentosJSON.idRegistroConvocatoria = idRegistroConvocatoria;
		documentosJSON = JSON.parse(JSON.stringify(documentosJSON));
		documentosJSON = JSON.stringify(documentosJSON);
		$.ajax({
			method: "POST",
			async: true,
			cache: false,
			dataType: 'json',
			timeout: 30000,
			url: base_url+"/DocumentoController/registrarDocumento",
			data: documentosJSON
		}).done(function(respuesta) {
			respuesta.estado?alert('documentos registrados correctamente'):alert('los documentos seleccionados no se han podido registrar');
		}).fail(function(event){
			alert('los documentos no han podido registrarse, error del servidor "500"');
		});

	}

}
