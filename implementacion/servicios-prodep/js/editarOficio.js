$(document).ready(function(){
	cargarOficio();
	$('#editarOficio').submit(function(event){
		event.preventDefault();
		editarOficio();
	});
});

function cargarOficio(){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url + "/OficioController/obtenerOficio",
		data: {'idOficio':idOficio}
	}).done(function(oficioJSON) {
		mostrarDatosOficio(oficioJSON.oficio);
	}).fail(function(event){
		console.log(event);
		alert('Existe un problema con el registro');
	});
}

function mostrarDatosOficio(oficio){
	console.log(oficio);
	$('#numeroOficio').val(oficio.numeroOficio);
	$('#folioProdep').val(oficio.docente.nombre);
	$('#idProyecto').val(oficio.idProyecto);
	$('#claveProdep').val(oficio.folioProdep);
	$('#asunto').val(oficio.asunto);
	$('#monto').val(oficio.monto);
	$('#anoConvocatoria').val(oficio.anoConvocatoria);
	$('#fechaEnvio').val(oficio.fechaEnvio);
	$('#fechaRespuesta').val(oficio.fechaRespuesta);
	$('#aprobado') .prop('checked', oficio.aprobado=1?true:false);
	cargarNombreDestinatario(oficio.idDestinatario);
	cargarNombreConvocatoria(oficio.idConvocatoria);
}

function cargarNombreDestinatario(idDestinatario){
	var comboDestinatario = $('#comboDestinatario');
	for(var i = 0; i < destinatariosArray.length; i++){
		if(destinatariosArray[i]['idDestinatario'] == idDestinatario){
			document.getElementById("comboDestinatario").selectedIndex = i;	
		}
	}
}

function cargarNombreConvocatoria(idConvocatoria){
	var comboConvocatorias = $('#comboConvocatorias');
	for(var i = 0; i < convocatoriasArray.length; i++){
		if(convocatoriasArray[i]['idConvocatoria'] == idConvocatoria){
			document.getElementById("comboConvocatorias").selectedIndex = i;	
		}
	}
}
function editarOficio(){
	var oficioJSON = new Object();
	oficioJSON.idOficio = idOficio;
	oficioJSON.numeroOficio = $('#numeroOficio').val();
	oficioJSON.idProyecto = $('#idProyecto').val();
	oficioJSON.idDestinatario = obtenerIdDestinatario($('#comboDestinatario').val());;
	oficioJSON.idConvocatoria = obtenerIdConvocatoria($('#comboConvocatorias').val());;
	oficioJSON.claveProdep = $('#claveProdep').val();
	oficioJSON.asunto = $('#asunto').val();
	oficioJSON.monto = $('#monto').val();
	oficioJSON.anoConvocatoria = obtenerFechaConvocatoria();
	oficioJSON.fechaEnvio = obtenerFechaEnvio();
	oficioJSON.fechaRespuesta = obtenerFecha(new Date($('#fechaRespuesta').val()));
	$('#aprobado').is(':checked')?oficioJSON.aprobado = true:oficioJSON.aprobado = false;
	oficioJSON = JSON.parse(JSON.stringify(oficioJSON));
	oficioJSON = JSON.stringify(oficioJSON);
	console.log(oficioJSON);
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url + "/OficioController/editarOficioRegistro",
		data: oficioJSON
	}).done(function(oficioRegistroJSON) {
		if(oficioRegistroJSON.estado){
			alert('Oficio registrado');
			$(':text').val('');
			$('#asunto').val('');
		}else{
			alert('el oficio no se pudo registrar');
		}
	}).fail(function(algo){
		alert('Existe un problema con el registro'+ algo);
		console.log(algo);
	});
}