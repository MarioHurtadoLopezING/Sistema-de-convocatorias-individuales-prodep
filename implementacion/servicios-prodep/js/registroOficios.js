var convocatoriasArray = new Array();
var destinatariosArray = new Array();

$(document).ready(function(){
	 cargarCombos();
	 buscarDocente();
	 $("#nuevoOficio").submit(function(event){
		event.preventDefault();
		registrarOficio();
	});
});

function cargarCombos(){
	cargarComboConvocatorias();
	cargarComboDestinatarios();
}
/*se repite*/
function cargarComboConvocatorias(){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/ConvocatoriaController/obtenerConvocatorias",
	}).done(function(convocatoriasJSON) {
		let convocatorias = convocatoriasJSON.convocatorias;
		cargarListaConvocatorias(convocatorias);
		for (let i = 0; i < convocatorias.length; i++){
			$('#comboConvocatorias').append('<option>'+convocatorias[i]['nombre']+'</option>');
		}
	});	
}

function cargarComboDestinatarios(){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/DestinatarioController/obtenerDestinatarios",
	}).done(function(destinatariosJSON) {
		let destinatarios = destinatariosJSON.destinatarios;
		cargarListaDestinatarios(destinatarios);
		for (let i = 0; i < destinatarios.length; i++){
			$('#comboDestinatario').append('<option>'+destinatarios[i]['nombre']+'</option>');
		}
	});	
}
function cargarListaConvocatorias(convocatorias){
	for (let i = 0; i < convocatorias.length; i++){
		convocatoriasArray.push(new Convocatoria(convocatorias[i]['idConvocatoria'],convocatorias[i]['nombre']));
	}
}

function cargarListaDestinatarios(destinatarios){
	for (let i = 0; i < destinatarios.length; i++){
		destinatariosArray.push(new Destinatario(destinatarios[i]['idDestinatario'],destinatarios[i]['nombre']));
	}
}

function buscarDocente(){
	$('#buscarDocente').on('click',function (event) {
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

function registrarOficio(){
	var oficioJSON = new Object();
	oficioJSON.numeroOficio = $('#oficioUV').val();
	oficioJSON.idDestinatario = obtenerIdDestinatario($('#comboDestinatario').val());
	oficioJSON.idProyecto = $('#idProyecto').val();
	oficioJSON.idConvocatoria =  obtenerIdConvocatoria($('#comboConvocatorias').val());
	oficioJSON.claveProdep = $('#claveProdep').val();
	oficioJSON.asunto = $('#asunto').val();
	oficioJSON.monto = $('#monto').val();
	oficioJSON.anoConvocatoria =obtenerFecha(new Date($('#anoConvocatoria').val()));
	oficioJSON.fechaEnvio = obtenerFecha(new Date($('#fechaEnvio').val()));
	oficioJSON = JSON.parse(JSON.stringify(oficioJSON));
	oficioJSON = JSON.stringify(oficioJSON);
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url + "/OficioController/registrarOficio",
		data: JSON.stringify(oficioJSON)
	}).done(function(oficioRegistroJSON) {
		if(oficioRegistroJSON.estado){
			alert('Oficio registrado');
			$(':text').val('');
			$('#asunto').val('');
		}else{
			alert('el oficio no se pudo registrar');
		}
	}).fail(function(event){
		alert('Existe un problema con el registro');
		console.log(event);
	});
}

function obtenerIdDestinatario(nombreDestinatario){
	let idDestinatario = 0;
	for(let i = 0; i < destinatariosArray.length; i++){
		let destinatario = destinatariosArray[i];
		if(destinatario.nombre == nombreDestinatario){
			idDestinatario = destinatario.idDestinatario;
			break;
		}
	}
	return idDestinatario;
}

function obtenerIdConvocatoria(nombreConvocatoria){
	let idConvocatoria = 0;
	for(let i = 0; i < convocatoriasArray.length; i++){
		let convocatoria = convocatoriasArray[i];
		if (convocatoria.nombre == nombreConvocatoria){
			idConvocatoria = convocatoria.idConvocatoria;
			break;
		}
	}
	return idConvocatoria;
}

function obtenerFecha(fechaRespuesta){
	let dia = fechaRespuesta.getDate(); 
    let mes =fechaRespuesta.getMonth() + 1; 
    let año = fechaRespuesta.getFullYear(); 
	return año+"-"+mes+"-"+dia;
}