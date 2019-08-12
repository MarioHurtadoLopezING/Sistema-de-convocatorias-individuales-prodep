var regionesArray = new Array();
var areasArray = new Array();
var entidadesArray = new Array();
var convocatoriasArray = new Array();

$(document).ready(function(){
	cargarProyecto();
	buscarDocenteCorreo();
	buscarDirectorCorreo();
	buscarAdministradorCorreo();
	$('#editarProyecto').submit(function(event){
		event.preventDefault();
		editarProyecto();
	});
});

function cargarProyecto(){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url + "/ProyectoController/obtenerProyecto",
		data: {'idProyecto':idProyecto}
	}).done(function(proyectoRegistroJSON) {
		mostrarDatosProyecto(proyectoRegistroJSON.proyecto);
		console.log(proyectoRegistroJSON.proyecto);
		cargarComboRegiones(proyectoRegistroJSON.proyecto.Region);
		cargarComboAreas(proyectoRegistroJSON.proyecto.AreaEducativa);
		cargarComboEntidades(proyectoRegistroJSON.proyecto.EntidadEducativa);
		cargarComboConvocatorias(proyectoRegistroJSON.proyecto.Convocatoria);

	}).fail(function(){
		alert('Existe un problema con el registro');
	});
}
function mostrarDatosProyecto(proyectoDatos){
	$("#folioProdep").val(proyectoDatos.FolioProdep);
	$("#claveProgramatica").val(proyectoDatos.ClaveProgramatica);
	$("#oficioAutorizacion").val(proyectoDatos.OficioAutorizacion);
	$("#numeroDependencia").val(proyectoDatos.NumeroDependencia);
	var dateControl = document.getElementById('fechaInicioApoyo');
	dateControl.value = proyectoDatos.InicioApoyo;
	if(proyectoDatos.FinApoyo != null){
		var controlFinApoyo = document.getElementById('fechaFinApoyo');
		controlFinApoyo.value = proyectoDatos.FinApoyo;
	}
	buscarDocente(proyectoDatos.Docente);
	buscarDirector(proyectoDatos.Director);
	buscarAdministrador(proyectoDatos.Administrador);
}

function cargarComboRegiones(Region){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/RegionController/obtenerRegiones",
	}).done(function(regionesJSON) {
		let regiones = regionesJSON.regiones;
		cargarListaregiones(regiones);
		for (let i = 0; i < regiones.length; i++){
			if(regiones[i]['idRegion'] == Region){
				$('#comboRegion').append('<option selected="true">'+regiones[i]['nombre']+'</option>');
			}else{
				$('#comboRegion').append('<option>'+regiones[i]['nombre']+'</option>');
			}
		}
	});
}

function cargarComboAreas(AreaEducativa){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/AreaController/obtenerAreas",
	}).done(function(AreasJSON) {
		let areas = AreasJSON.areas;
		cargarListaAreas(areas);
		for (let i = 0; i < areas.length; i++){
			if(areas[i]['idArea'] == AreaEducativa){
				$('#comboArea').append('<option  selected="true">'+areas[i]['nombre']+'</option>');
			}else{
				$('#comboArea').append('<option>'+areas[i]['nombre']+'</option>');
			}
		}
	});
}

function cargarComboEntidades(EntidadEducativa){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/EntidadEducativaController/obtenerEntidadesEducativas",
	}).done(function(entidadesJSON) {
		let entidades = JSON.parse(entidadesJSON.entidades);
		cargarListaEntides(entidades);
		for (let i = 0; i < entidades.length; i++){
			if(entidades[i]['idEntidad'] == EntidadEducativa){
				$('#comboEntidades').append('<option selected="true">'+entidades[i]['nombre']+'</option>');
			}else{
				$('#comboEntidades').append('<option>'+entidades[i]['nombre']+'</option>');
			}
		}
	});	
}

function cargarComboConvocatorias(proyectoConvocatoria){
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
			if(convocatorias[i]['idConvocatoria'] == proyectoConvocatoria){
				$('#comboConvocatorias').append('<option selected="true">'+convocatorias[i]['nombre']+'</option>');
			}else{
				$('#comboConvocatorias').append('<option>'+convocatorias[i]['nombre']+'</option>');
			}

		}
	});	
}

function cargarListaregiones(regiones){
	for(let i = 0; i < regiones.length; i++){
		regionesArray.push(new Region(regiones[i]['idRegion'], regiones[i]['nombre']));
	}

}

function cargarListaAreas(areas){
	for(let i = 0; i < areas.length; i++){
		areasArray.push(new Area(areas[i]['idArea'],areas[i]['nombre']));
	}
}

function cargarListaEntides(entidades){
	for(let i = 0; i < entidades.length; i++){
		entidadesArray.push(new EntidadEducativa(entidades[i]['idEntidad'],entidades[i]['nombre']));
	}
}

function cargarListaConvocatorias(convocatorias){
	for (let i = 0; i < convocatorias.length; i++){
		convocatoriasArray.push(new Convocatoria(convocatorias[i]['idConvocatoria'],convocatorias[i]['nombre']));
	}
}
function buscarDocente(idDocente){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/DocenteController/obtenerDocenteId",
		data: { 'idDocente': idDocente}
	}).done(function(docenteJSON) {
		if(docenteJSON.idDocente > 0){
			$('#correoDocente').val(docenteJSON.nombreDocente);
			$('#idDocente').val(docenteJSON.idDocente);
		}else{
			alert(docenteJSON.mensaje);
		}
	});
}

function buscarDirector(idDirector){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/DirectorController/obtenerDirectorId",
		data: { 'idDirector': idDirector}
	}).done(function(directorJSON) {
		if(directorJSON.idDirector > 0){
			$('#correoDirector').val(directorJSON.nombreDirector);
			$('#idDirector').val(directorJSON.idDirector);
		}else{
			alert(directorJSON.mensaje);
		}
	});
}

function buscarAdministrador(idAdministrador){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/AdministradorController/obtenerAdministradorId",
		data: { 'idAdministrador': idAdministrador}
	}).done(function(administradorJSON) {
		if(administradorJSON.idAdministrador > 0){
			$('#correoAdministrador').val(administradorJSON.nombreAdministrador);
			$('#idAdministrador').val(administradorJSON.idAdministrador);
		}else{
			alert(administradorJSON.mensaje);
		}
	});
}

function editarProyecto(){
	var proyectoJSON = new Object();
	proyectoJSON.idProyecto = idProyecto;
	proyectoJSON.idDocente = $('#idDocente').val();
	proyectoJSON.idDirector = $('#idDirector').val();
	proyectoJSON.idAdministrador = $('#idAdministrador').val();
	proyectoJSON.fechaInicioApoyo = obtenerFecha();
	proyectoJSON.folioProdep = $('#folioProdep').val();
	proyectoJSON.claveProgramatica = $('#claveProgramatica').val();
	proyectoJSON.oficioAutorizacion = $('#oficioAutorizacion').val();
	proyectoJSON.numeroDependencia = $('#numeroDependencia').val();
	proyectoJSON.idRegion = obtenerIdRegion($('#comboRegion').val());
	proyectoJSON.idArea = obtenerIdArea($('#comboArea').val());
	proyectoJSON.idEntidad = obtenerIdEntidad($('#comboEntidades').val());
	proyectoJSON.idConvocatoria = obtenerIdConvocatoria($('#comboConvocatorias').val());
	proyectoJSON.fechaFinApoyo = obtenerFechaFinApoyo();
	proyectoJSON = JSON.parse(JSON.stringify(proyectoJSON));
	console.log(proyectoJSON);
	proyectoJSON = JSON.stringify(proyectoJSON);
	
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url + "/ProyectoController/editarProyectoRegistro",
		data: proyectoJSON
	}).done(function(proyectoRegistroJSON) {
		if(proyectoRegistroJSON.estado){
			alert('Proyecto registrado');
			$(':text').val('');
			console.log(proyectoRegistroJSON);
			console.log(JSON.stringify(proyectoRegistroJSON));
		}else{
			alert('el proyecto no se pudo registrar');
			console.log(proyectoRegistroJSON);
		}
	}).fail(function(){
		alert('Existe un problema con el registro');
		console.log(proyectoRegistroJSON);
	});
}

function obtenerIdRegion(nombreRegion){
	let idRegion = 0;
	for(let i = 0; i < regionesArray.length; i++){
		let region = regionesArray[i];
		if(region.nombre == nombreRegion){
			idRegion = region.idRegion;
			break;
		}
	}
	return idRegion;
}

function obtenerIdArea(nombreArea){
	let idArea = 0;
	for(let i = 0; i < areasArray.length; i++){
		let area = areasArray[i];
		if(area.nombre == nombreArea){
			idArea = area.idArea;
			break;
		}
	}
	return idArea;
}

function obtenerIdEntidad(nombreEntidad){
	let idEntidad = 0;
	for (let i = 0; i < entidadesArray.length; i++){
		let entidad = entidadesArray[i];
		if(entidad.nombre == nombreEntidad){
			idEntidad = entidad.idEntidadEducativa;
			break;
		}
	}
	return idEntidad;
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

function obtenerFecha(){
	let fecha = new Date($('#fechaInicioApoyo').val());
	let dia = fecha.getDate(); 
    let mes =fecha.getMonth() + 1; 
    let año = fecha.getFullYear(); 
	return año+"-"+mes+"-"+dia;
}
function obtenerFechaFinApoyo(){
	let fecha = new Date($('#fechaFinApoyo').val());
	let dia = fecha.getDate(); 
    let mes =fecha.getMonth() + 1; 
    let año = fecha.getFullYear(); 
	return año+"-"+mes+"-"+dia;
}

function buscarDocenteCorreo(){
	$('#buscarDocente').on('click',function (event) {
		let correoDocente = $('#correoDocente').val();
		$.ajax({
			method: "POST",
			async: true,
			cache: false,
			dataType: 'json',
			timeout: 30000,
			url: base_url+"/DocenteController/obtenerDocente",
			data: { 'correo': correoDocente}
		}).done(function(docenteJSON) {
			if(docenteJSON.idDocente > 0){
				$('#correoDocente').val(docenteJSON.nombreDocente);
				$('#idDocente').val(docenteJSON.idDocente);
			}else{
				alert(docenteJSON.mensaje);
			}
		});
	});
}

function buscarDirectorCorreo(){
	$('#buscarDirector').on('click',function(event){
		let correoDirector = $('#correoDirector').val();
		$.ajax({
			method: "POST",
			async: true,
			cache: false,
			dataType: 'json',
			timeout: 30000,
			url: base_url+"/DirectorController/obtenerDirector",
			data: { 'correo': correoDirector}
		}).done(function(directorJSON) {
			if(directorJSON.idDirector > 0){
				$('#correoDirector').val(directorJSON.nombreDirector);
				$('#idDirector').val(directorJSON.idDirector);
			}else{
				alert(directorJSON.mensaje);
			}
		});
	});
}

function buscarAdministradorCorreo(){
	$('#buscarAdministrador').on('click',function(event){
		let correoAdministrador = $('#correoAdministrador').val();
		$.ajax({
			method: "POST",
			async: true,
			cache: false,
			dataType: 'json',
			timeout: 30000,
			url: base_url+"/AdministradorController/obtenerAdministrador",
			data: { 'correo': correoAdministrador}
		}).done(function(administradorJSON) {
			if(administradorJSON.idAdministrador > 0){
				$('#correoAdministrador').val(administradorJSON.nombreAdministrador);
				$('#idAdministrador').val(administradorJSON.idAdministrador);
			}else{
				alert(administradorJSON.mensaje);
			}
		});
	});
}