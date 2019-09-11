$(document).ready(function(){
	obtenerDocentes();
});
function obtenerDocentes(){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/DocenteController/obtenerDocentes",
	}).done(function(docentesJSON) {
		console.log(docentesJSON.docentes[1]);
		mostrarDocentes(docentesJSON.docentes);
	}).fail(function(event){
		console.log(event);
	});
}
function mostrarDocentes(docentes){
	for (var i = 0; i < docentes.length; i++) {
		let divProyectoItem = document.createElement('div');
		divProyectoItem.classList.add('proyectoItem');
		divProyectoItem.appendChild(divLogo());
		divProyectoItem.appendChild(datosDocente(docentes[i]));
		$("#scrollDocentes").append(divProyectoItem);
	}
}
function datosDocente(docente){
	let divDatosDocente = document.createElement('div');
	divDatosDocente.classList.add('datosProyecto');
	let divNumeroPersonal = divDatoConvocatoria( "<span class='esconder'>Nombre del docente:</span> ",docente['doc_nombre']);
	let divResponsable =divDatoConvocatoria("Número de personal: ",docente['doc_numeroPersonal']);
	let divClaveProdep = divDatoConvocatoria("Correo: ",docente['doc_correo']);
	divDatosDocente.appendChild(divNumeroPersonal);
	divDatosDocente.appendChild(divResponsable);
	divDatosDocente.appendChild(divClaveProdep);
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