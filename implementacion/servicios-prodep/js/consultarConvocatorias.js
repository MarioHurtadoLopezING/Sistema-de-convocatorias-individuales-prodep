$(document).ready(function(){
	obtenerConvocatorias();
});

function obtenerConvocatorias(){
	$.ajax({
		method: "POST",
		async: true,
		cache: false,
		dataType: 'json',
		timeout: 30000,
		url: base_url+"/RegistroConvocatoriaController/obtenerConvocatorias",
	}).done(function(convocatoriasJSON) {
		cargarConvocatoriasVista(convocatoriasJSON.convocatorias);
	}).fail(function(event){
		console.log(event);
	});
}

function cargarConvocatoriasVista(convocatorias){
	for(let i = 0; i < convocatorias.length; i++){
		let divProyectoItem = document.createElement('div');
		divProyectoItem.classList.add('proyectoItem');
		divProyectoItem.appendChild(divLogo());
		divProyectoItem.appendChild(datosConvocatoria(convocatorias[i]));
		divProyectoItem.appendChild(iconosEdicion("ver",convocatorias[i]));
		let rutaEdicion = document.createElement('a');
		rutaEdicion.href = base_url+"/RegistroConvocatoriaController/vista/editarConvocatoria/"+convocatorias[i]['reg_id'];
		rutaEdicion.appendChild(iconosEdicion("editar",convocatorias[i]));
		divProyectoItem.appendChild(rutaEdicion);
		$("#scrollConvocatorias").append(divProyectoItem);
	}	
}

function iconosEdicion(tituloImagen,convocatoria){
	let divImagen = document.createElement("div");
	tituloImagen == 'editar'?divImagen.classList.add("imagenProyectoRegistroVista","logo"):
	divImagen.classList.add("esconder","imagenProyectoRegistroVista","logo");
	let imagen = document.createElement("img");
	imagen.src ="/servicios-prodep/recursos/"+tituloImagen+".svg";
	divImagen.appendChild(imagen);
	if(tituloImagen == "ver"){
		divImagen.addEventListener('click',function(){
			consultarDatosConvocatoria(convocatoria);
		});
	}
	return divImagen;
}

function datosConvocatoria(convocatoria){
	let divDatosConvocatoria = document.createElement('div');
	divDatosConvocatoria.classList.add('datosProyecto');
	let divNumeroPersonal = divDatoConvocatoria( "Número personal:",convocatoria['docente']['doc_numeroPersonal']);
	let divResponsable =divDatoConvocatoria("<span class='esconder'>Responsable:</span> ",convocatoria['docente']['doc_nombre']);
	let divClaveProdep = divDatoConvocatoria("Folio PRODEP:",convocatoria['proyecto']['pro_folioProdep']);
	divDatosConvocatoria.appendChild(divNumeroPersonal);
	divDatosConvocatoria.appendChild(divResponsable);
	divDatosConvocatoria.appendChild(divClaveProdep);
	return divDatosConvocatoria;
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

function consultarDatosConvocatoria(convocatoria){
	let bodyModal = document.getElementById("bodyModalConvocatoria");
	bodyModal.innerHTML = "";
	let spanNombreDocente = document.createElement('h4');
	spanNombreDocente.innerHTML = "Nombre docente: "+convocatoria['docente']['doc_nombre'];
	let spanNumeroPersonal = document.createElement('h4');
	spanNumeroPersonal.innerHTML = "Número personal: "+ convocatoria['docente']['doc_numeroPersonal'];
	let spanFolioProdep = document.createElement('h4');
	spanFolioProdep.innerHTML = "Folio PRODEP: "+ convocatoria['proyecto']['pro_folioProdep'];
	let spanClaveProgramatica = document.createElement('h4');
	spanClaveProgramatica.innerHTML = "Clave programática: "+convocatoria['proyecto']['pro_claveProgramtica'];
	let spanAnoConvocatoria = document.createElement('h4');
	spanAnoConvocatoria.innerHTML = "Año convocatoria: "+convocatoria['reg_anoConvocatoria'];
	let spanEstado = document.createElement('h4');
	spanEstado.innerHTML = convocatoria['reg_estado'] == "1"? "Estado: entregado":"Estado: pendiente";
	let spanFechaVoBo = document.createElement('h4');
	spanFechaVoBo.innerHTML = "Fecha VoBo: "+convocatoria['reg_fechaVoBo'];
	bodyModal.appendChild(spanNombreDocente);
	bodyModal.appendChild(spanNumeroPersonal);
	bodyModal.appendChild(spanFolioProdep);
	bodyModal.appendChild(spanClaveProgramatica);
	bodyModal.appendChild(spanAnoConvocatoria);
	bodyModal.appendChild(spanEstado);
	bodyModal.appendChild(spanFechaVoBo);
	$('#modalConsultaConvocatorias').modal('show');
}