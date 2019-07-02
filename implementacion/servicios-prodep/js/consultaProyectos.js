var proyectosArray = new Array();

$(document).ready(function(){
	obtenerProyectos();
});


function obtenerProyectos(){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/ProyectoController/obtenerProyectos",
	}).done(function(proyectosJSON) {
		cargarListaProyectos(proyectosJSON.proyectos);
	}).fail(function(){
		console.log("no se pudo");
	});
}

function cargarListaProyectos(proyectos){
	for (let i = 0; i < proyectos.length; i++) {
		let docente = new Docente(proyectos[i]['docente']['idDocente'],
			proyectos[i]['docente']['nombre'],
			proyectos[i]['docente']['numeroPersonal']);
		proyectosArray.push(new Proyecto(proyectos[i]['idProyecto'],
			docente,
			proyectos[i]['claveProdep']));
	}
	cargarProyectosVista();
}

function cargarProyectosVista(){
	for(let i = 0; i < proyectosArray.length; i++){
		let divProyectoItem = document.createElement('div');
		divProyectoItem.classList.add('proyectoItem');
		divProyectoItem.appendChild(divLogo());
		divProyectoItem.appendChild(datosProyecto(proyectosArray[i]));
		divProyectoItem.appendChild(iconosEdicion("ver"));
		divProyectoItem.appendChild(iconosEdicion("editar"));

		$("#scrollProyectos").append(divProyectoItem);
	}	
}

function divLogo(){
	let divImagenProyectoRegistro = document.createElement('div');
	divImagenProyectoRegistro.classList.add('imagenProyectoRegistro','izquierda');
	let imagen = document.createElement('img');
	imagen.src = "/servicios-prodep/recursos/proyectoRegistro.svg";
	divImagenProyectoRegistro.appendChild(imagen);
	return divImagenProyectoRegistro;
}

function datosProyecto(proyecto){
	let divDatosProyecto = document.createElement('div');
	divDatosProyecto.classList.add('datosProyecto');
	let divNumeroPersonal = divDatoProyecto( "Número personal:",proyecto.docente.numeroPersonal);
	let divResponsable =divDatoProyecto("Responsable:",proyecto.docente.nombre);
	let divClaveProdep = divDatoProyecto("Folio PRODEP:",proyecto.claveProdep);
	divDatosProyecto.appendChild(divNumeroPersonal);
	divDatosProyecto.appendChild(divResponsable);
	divDatosProyecto.appendChild(divClaveProdep);
	return divDatosProyecto;
}

function divDatoProyecto(titulo,proyecto){
	let divNumeroPersonal = document.createElement('div');
	let numeroPersonal = document.createElement('span');
	numeroPersonal.innerHTML =titulo;
	let numero = document.createElement('span');
	numero.innerHTML = proyecto;
	divNumeroPersonal.appendChild(numeroPersonal);
	divNumeroPersonal.appendChild(numero);
	return divNumeroPersonal;
}

function iconosEdicion(tituloImagen){
	let divImagen = document.createElement("div");
	divImagen.classList.add("imagenProyectoRegistroVista","logo");
	let imagen = document.createElement("img");
	imagen.src ="/servicios-prodep/recursos/"+tituloImagen+".svg";
	divImagen.appendChild(imagen);
	return divImagen;
}