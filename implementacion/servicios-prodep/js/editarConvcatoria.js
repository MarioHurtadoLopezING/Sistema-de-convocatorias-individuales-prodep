$(document).ready(function () {
	obtenerConvocatoria();
	buscarDocente();
	buscarBecario();
	$('#editarRegistroConvocatoria').submit(function(event){
		event.preventDefault();
		editarConvocatoria();
	});
});

function obtenerConvocatoria(){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url + "/RegistroConvocatoriaController/obtenerConvocatoria",
		data: {'idConvocatoria':idConvocatoria}
	}).done(function(oficioJSON) {
		mostrarDatosConvocatoria(oficioJSON.convocatoria);
	}).fail(function(event){
		console.log(event);
		alert('Existe un problema con el registro');
	});
}

function mostrarDatosConvocatoria(convocatoria){
	$('#folioProdep').val(convocatoria['doc_nombre']);
	$('#idProyecto').val(convocatoria['pro_id']);
	$('#anoConvocatoria').val(convocatoria['reg_anoConvocatoria']);
	$('#fechaVoBo').val(convocatoria['reg_fechaVoBo']);
	$('#fechaVoBo').val(convocatoria['reg_fechaVoBo']);
	$('#correoBecario').val(convocatoria['bec_nombre']);
	$('#idBecario').val(convocatoria['bec_id']);
	$('#fechaIncioBecario').val(convocatoria['reg_fechaInicioBecario']);
	$('#aprobado') .prop('checked', convocatoria['reg_estado'] =="1"?true:false);
	mostrarDocumentos(convocatoria['documentos']);
}

function mostrarDocumentos(documentos){
	for(var i = 0; i < documentos.length; i++){
		$('#'+documentos[i]['doc_nombre']).prop('checked',documentos[i]['doc_estado'] == "1"? true:false);
		$('#id'+documentos[i]['doc_nombre']).val(documentos[i]['doc_id']);
	}
}

function editarConvocatoria(){
	var convocatoriaJSON = new Object();
	convocatoriaJSON.idConvocatoria = idConvocatoria;
	convocatoriaJSON.idProyecto = $('#idProyecto').val();	
	convocatoriaJSON.anoConvocatoria = $('#anoConvocatoria').val();	
	convocatoriaJSON.fechaVoBo = $('#fechaVoBo').val();
	convocatoriaJSON.idBecario = $('#idBecario').val();
	 $('#aprobado').is(':checked')?convocatoriaJSON.estado = true:convocatoriaJSON.estado = false;
	convocatoriaJSON.fechaIncioBecario = $('#fechaIncioBecario').val();
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url + "/RegistroConvocatoriaController/editarConvocatoria",
		data: JSON.stringify(convocatoriaJSON)
	}).done(function(result) {
		if(result){
		alert("Convocatoria editada");
		editarDocumentos();
		}else{
			alert("existe un problema con el servidor '404'");
		}
	}).fail(function(event){
		console.log(event);
		alert('Existe un problema con el registro');
	});
}

function editarDocumentos(){
	documentosJSON = new Object();
	$('#cartaPresentacion').is(':checked')?documentosJSON.cartaPresentacion = true:documentosJSON.cartaPresentacion = false;
	documentosJSON.idCartaPresentacion = $('#idcartaPresentacion').val();
	$('#constanciaEstudios').is(':checked')?documentosJSON.constanciaEstudios = true:documentosJSON.constanciaEstudios = false;
	documentosJSON.idConstanciaEstudios = $('#idconstanciaEstudios').val();
	$('#actaNacimiento').is(':checked')?documentosJSON.actaNacimiento = true:documentosJSON.actaNacimiento = false;
	documentosJSON.idActaNacimiento = $('#idactaNacimiento').val();
	$('#credenciaElector').is(':checked')?documentosJSON.credenciaElector = true:documentosJSON.credenciaElector = false;
	documentosJSON.idCredencialElector= $('#idcredenciaElector').val();
	$('#curp').is(':checked')?documentosJSON.curp = true:documentosJSON.curp = false;
	documentosJSON.idCurp = $('#idcurp').val();
	$('#rfc').is(':checked')?documentosJSON.rfc = true:documentosJSON.rfc = false;
	documentosJSON.idRfc = $('#idrfc').val();
	$('#cartaCompromiso').is(':checked')?documentosJSON.cartaCompromiso = true:documentosJSON.cartaCompromiso = false;
	documentosJSON.idCartaCompromiso = $('#idcartaCompromiso').val();
	$('#numeroCuenta').is(':checked')?documentosJSON.numeroCuenta = true:documentosJSON.numeroCuenta = false;
	documentosJSON.idNumeroCuenta = $('#idnumeroCuenta').val();
	documentosJSON.idRegistroConvocatoria = idConvocatoria;
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url + "/DocumentoController/editarDocumentos",
		data: JSON.stringify(documentosJSON)
	}).done(function(result) {
		if(result){
		alert("Registro de documentos editado");
		}else{
			alert("existe un problema con el servidor '404'");
		}
	}).fail(function(event){
		console.log(event);
		alert('Existe un problema con el registro');
	});

}

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