$(document).ready(function(){
	obtenerBecarios();
});
function obtenerBecarios(){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/BecarioController/obtenerBecarios",
	}).done(function(becariosJSON) {
		console.log(becariosJSON.becarios);
		mostrarDirectores(becariosJSON.becarios);
	}).fail(function(event){
		console.log(event);
	});
}
function mostrarDirectores(becarios){
	for (var i = 0; i < becarios.length; i++) {
		let divProyectoItem = document.createElement('div');
		divProyectoItem.classList.add('proyectoItem');
		divProyectoItem.appendChild(divLogo());
		divProyectoItem.appendChild(datosDocente(becarios[i]));
		$("#scrollBecarios").append(divProyectoItem);
	}
}
function datosDocente(becario){
	console.log(becario);
	let divDatosDocente = document.createElement('div');
	divDatosDocente.classList.add('datosProyecto');
	let divNumeroPersonal = divDatoConvocatoria( "<span class='esconder'>Nombre del becario:</span> ",becario['bec_nombre']);
	let divResponsable =divDatoConvocatoria("Correo: ",becario['bec_correo']);
	divDatosDocente.appendChild(divNumeroPersonal);
	divDatosDocente.appendChild(divResponsable);
	return divDatosDocente;
}
function divDatoConvocatoria(titulo,datoConvocatoria){
	let divNumeroPersonal = document.createElement('div');
	let numeroPersonal = document.createElement('span');
	numeroPersonal.innerHTML =titulo;
	let numero = document.createElement('span');
	numero.innerHTML = datoConvocatoria;
	divNumeroPersonal.appendChild(numeroPersonal);
	divNumeroPersonal.appendChild(numero);
	return divNumeroPersonal;
}
function divLogo(){
	let divImagenProyectoRegistro = document.createElement('div');
	divImagenProyectoRegistro.classList.add('esconder','imagenProyectoRegistro','izquierda');
	let imagen = document.createElement('img');
	imagen.src = "/servicios-prodep/recursos/proyectoRegistro.svg";
	divImagenProyectoRegistro.appendChild(imagen);
	return divImagenProyectoRegistro;
}