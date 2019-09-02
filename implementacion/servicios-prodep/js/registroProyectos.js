var regionesArray = new Array();
var areasArray = new Array();
var entidadesArray = new Array();
var convocatoriasArray = new Array();

$(document).ready(function(){
	buscarDocente();
	buscarDirector();
	buscarAdministrador();
	cargarCombos();
	$('#nuevoProyecto').submit(function(event){
		event.preventDefault();
		registrarProyecto();
	});
});

function registrarProyecto(){
	var proyectoJSON = new Object();
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
	proyectoJSON = JSON.parse(JSON.stringify(proyectoJSON));
	proyectoJSON = JSON.stringify(proyectoJSON);
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url + "/ProyectoController/registrarProyecto",
		data: proyectoJSON
	}).done(function(proyectoRegistroJSON) {
		if(proyectoRegistroJSON.estado){
			alert('Proyecto registrado');
			$(':text').val('');
		}else{
			alert('el proyecto no se pudo registrar');
		}
	}).fail(function(){
		alert('Existe un problema con el registro');
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

function buscarDocente(){
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

function buscarDirector(){
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

function buscarAdministrador(){
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

function cargarCombos(){
	cargarComboRegiones();
	cargarComboAreas();
	cargarComboEntidades();
	cargarComboConvocatorias();
}
function cargarComboRegiones(){
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
			$('#comboRegion').append('<option>'+regiones[i]['nombre']+'</option>');
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

function cargarComboAreas(){
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
			$('#comboArea').append('<option>'+areas[i]['nombre']+'</option>');
		}
	});
}

function cargarComboEntidades(){
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
			$('#comboEntidades').append('<option>'+entidades[i]['nombre']+'</option>');
		}
	});	
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