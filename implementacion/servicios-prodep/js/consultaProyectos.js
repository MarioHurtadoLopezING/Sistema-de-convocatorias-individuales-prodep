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
	}).fail(function(event){
		console.log(event);
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
		divProyectoItem.appendChild(iconosEdicion("ver",proyectosArray[i]));
		let rutaEdicion = document.createElement('a');
		rutaEdicion.href = base_url+"/ProyectoController/editarProyecto/"+proyectosArray[i]['idProyecto'];
		rutaEdicion.appendChild(iconosEdicion("editar",proyectosArray[i]));
		divProyectoItem.appendChild(rutaEdicion);
		$("#scrollProyectos").append(divProyectoItem);
	}	
}

function divLogo(){
	let divImagenProyectoRegistro = document.createElement('div');
	divImagenProyectoRegistro.classList.add('esconder','imagenProyectoRegistro','izquierda');
	let imagen = document.createElement('img');
	imagen.src = "/servicios-prodep/recursos/proyectoRegistro.svg";
	divImagenProyectoRegistro.appendChild(imagen);
	return divImagenProyectoRegistro;
}

function datosProyecto(proyecto){
	let divDatosProyecto = document.createElement('div');
	divDatosProyecto.classList.add('datosProyecto');
	let divNumeroPersonal = divDatoProyecto( "Número personal: ",proyecto.docente.numeroPersonal);
	let divResponsable =divDatoProyecto("<span class='esconder'>Responsable:</span> ",proyecto.docente.nombre);
	let divClaveProdep = divDatoProyecto("Folio PRODEP: ",proyecto.claveProdep);
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

function consultarDatosProyecto(proyecto, docente){
	let bodyModal = document.getElementById("bodyModalProyecto");
	bodyModal.innerHTML = "";
	let spanNombreDocente = document.createElement('h4');
	spanNombreDocente.innerHTML = "Nombre docente: "+docente.nombre;
	let spanNumeroPersonal = document.createElement('h4');
	spanNumeroPersonal.innerHTML = "Número personal: "+ docente.numeroPersonal;
	let spanFolioProdep = document.createElement('h4');
	spanFolioProdep.innerHTML = "Folio PRODEP: "+ proyecto.folioProdep;
	let spanClaveProgramatica = document.createElement('h4');
	spanClaveProgramatica.innerHTML = "Clave programática: "+proyecto.claveProgramatica;
	let spanInicioApoyo = document.createElement('h4');
	spanInicioApoyo.innerHTML = "Inicio de apoyo: "+proyecto.inicioApoyo;
	let spanOficioAutorización = document.createElement('h4');
	spanOficioAutorización.innerHTML = "Oficio de autorización: "+proyecto.oficioAutorizacion;
	bodyModal.appendChild(spanNombreDocente);
	bodyModal.appendChild(spanNumeroPersonal);
	bodyModal.appendChild(spanFolioProdep);
	bodyModal.appendChild(spanClaveProgramatica);
	bodyModal.appendChild(spanInicioApoyo);
	bodyModal.appendChild(spanOficioAutorización);
	$('#modalConsultaProyecto').modal('show');
}

function obtenerProyecto(proyecto){
	let id =  proyecto['idProyecto'];
	return $.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/ProyectoController/obtenerProyecto",
		data: { 'idProyecto': id}
	}).fail(function(event){
		console.log(event);
	});
}

function iconosEdicion(tituloImagen,proyecto){
	let divImagen = document.createElement("div");
	tituloImagen == 'editar'?divImagen.classList.add("imagenProyectoRegistroVista","logo"):
	divImagen.classList.add("esconder","imagenProyectoRegistroVista","logo");
	let imagen = document.createElement("img");
	imagen.src ="/servicios-prodep/recursos/"+tituloImagen+".svg";
	divImagen.appendChild(imagen);
	divImagen.addEventListener('click',function(){
		obtenerProyecto(proyecto).done(function(result){
			console.log(result);
			if(tituloImagen == 'ver'){
				consultarDatosProyecto(result['proyecto'],proyecto.docente);
			}
		});
	});
	return divImagen;
}