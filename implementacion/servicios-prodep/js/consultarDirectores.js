$(document).ready(function(){
	obtenerDirectores();
});
function obtenerDirectores(){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/DirectorController/obtenerDirectores",
	}).done(function(directoresJSON) {
		console.log(directoresJSON.directores[1]);
		mostrarDirectores(directoresJSON.directores);
	}).fail(function(event){
		console.log(event);
	});
}
function mostrarDirectores(directores){
	for (var i = 0; i < directores.length; i++) {
		let divProyectoItem = document.createElement('div');
		divProyectoItem.classList.add('proyectoItem');
		divProyectoItem.appendChild(divLogo());
		divProyectoItem.appendChild(datosDocente(directores[i]));
		$("#scrollDocentes").append(divProyectoItem);
	}
}
function datosDocente(director){
	let divDatosDocente = document.createElement('div');
	divDatosDocente.classList.add('datosProyecto');
	let divNumeroPersonal = divDatoConvocatoria( "Nombre del director: ",director['dir_nombre']);
	let divResponsable =divDatoConvocatoria("Correo: ",director['dir_correo']);
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
	divImagenProyectoRegistro.classList.add('imagenProyectoRegistro','izquierda');
	let imagen = document.createElement('img');
	imagen.src = "/servicios-prodep/recursos/proyectoRegistro.svg";
	divImagenProyectoRegistro.appendChild(imagen);
	return divImagenProyectoRegistro;
}