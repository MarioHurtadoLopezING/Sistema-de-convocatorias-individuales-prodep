var oficiosArray = new Array();

$(document).ready(function(){
	obtenerOficios();
});

function obtenerOficios(){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/OficioController/obtenerOficios",
	}).done(function(OficiosJSON) {
		console.log(OficiosJSON);
		cargarListaOficios(OficiosJSON.oficios);
	}).fail(function(result){
		console.log("no se pudo");
		console.log(result);
	});
}

function cargarListaOficios(oficios){
	for(let i = 0; i< oficios.length; i++){
		let docente = new Docente(
			oficios[i]['docente']['idDocente'],
			oficios[i]['docente']['nombre'],
			oficios[i]['docente']['numeroPersonal']);
		let oficio = new Oficio(
			oficios[i]['idOficio'],
			oficios[i]['anoConvocatoria'],
			oficios[i]['asunto'],
			docente,
			oficios[i]['fechaEnvio'],
			oficios[i]['folioProdep'],
			oficios[i]['monto']);
		oficiosArray.push(oficio);
	}
	cargarOficiosVista();
}

function cargarOficiosVista(){
	for(let i = 0; i < oficiosArray.length; i++){
		console.log(oficiosArray[i]);
		let divOficioItem = document.createElement('div');
		divOficioItem.classList.add('proyectoItem');
		divOficioItem.appendChild(divLogo());
		divOficioItem.appendChild(datosOficio(oficiosArray[i]));
		divOficioItem.appendChild(iconosEdicion("ver",oficiosArray[i]));
		let rutaEdicion = document.createElement('a');
		rutaEdicion.href = base_url + "/OficioController/editarOficio/"+oficiosArray[i]['idOficio'];
		rutaEdicion.appendChild(iconosEdicion("editar",oficiosArray[i]));
		divOficioItem.appendChild(rutaEdicion);
		$("#scrollOficios").append(divOficioItem);
	}	
}

/*esta función se reptite*/
function divLogo(){
	let divImagenOficioRegistro = document.createElement('div');
	divImagenOficioRegistro.classList.add('imagenProyectoRegistro','izquierda');
	let imagen = document.createElement('img');
	imagen.src = "/servicios-prodep/recursos/proyectoRegistro.svg";
	divImagenOficioRegistro.appendChild(imagen);
	return divImagenOficioRegistro;
}

function datosOficio(oficio){
	let divDatosProyecto = document.createElement('div');
	divDatosProyecto.classList.add('datosProyecto');
	let divNumeroPersonal = divDatoOficio( "Número personal:",oficio.docente.numeroPersonal);
	let divResponsable =divDatoOficio("Responsable:",oficio.docente.nombre);
	let divClaveProdep = divDatoOficio("Folio PRODEP:",oficio.folioProdep);
	divDatosProyecto.appendChild(divNumeroPersonal);
	divDatosProyecto.appendChild(divResponsable);
	divDatosProyecto.appendChild(divClaveProdep);
	return divDatosProyecto;
}

function divDatoOficio(titulo,oficio){
	let divNumeroPersonal = document.createElement('div');
	let numeroPersonal = document.createElement('span');
	numeroPersonal.innerHTML =titulo;
	let numero = document.createElement('span');
	numero.innerHTML = oficio;
	divNumeroPersonal.appendChild(numeroPersonal);
	divNumeroPersonal.appendChild(numero);
	return divNumeroPersonal;
}
function iconosEdicion(tituloImagen,oficio){
	let divImagen = document.createElement("div");
	divImagen.classList.add("imagenProyectoRegistroVista","logo");
	let imagen = document.createElement("img");
	imagen.src ="/servicios-prodep/recursos/"+tituloImagen+".svg";
	divImagen.appendChild(imagen);
	divImagen.addEventListener('click',function(){
		if(tituloImagen == 'ver'){
			consultarOficio(oficio);
		}else{
			alert("esto es para editar");
		}
	});
	return divImagen;
}

function consultarOficio(oficio){
	let bodyModal = document.getElementById("bodyModalOficio");
	bodyModal.innerHTML = "";
	let spanNombreDocente = document.createElement('h4');
	spanNombreDocente.innerHTML = "Nombre docente: "+oficio.docente.nombre;
	let spanNumeroPersonal = document.createElement('h4');
	spanNumeroPersonal.innerHTML = "Año convocatoria: "+ oficio.añoConvocatoria;
	let spanFolioProdep = document.createElement('h4');
	spanFolioProdep.innerHTML = "Folio PRODEP: "+ oficio.folioProdep;
	let spanClaveProgramatica = document.createElement('h4');
	spanClaveProgramatica.innerHTML = "FechaEnvío: "+oficio.fechaEnvio;
	let spanAsunto = document.createElement('h4');
	spanAsunto.innerHTML = "Asunto: "+oficio.asunto;
	bodyModal.appendChild(spanNombreDocente);
	bodyModal.appendChild(spanNumeroPersonal);
	bodyModal.appendChild(spanFolioProdep);
	bodyModal.appendChild(spanClaveProgramatica);
	bodyModal.appendChild(spanAsunto);
	$('#modalConsultaOficio').modal('show');
}