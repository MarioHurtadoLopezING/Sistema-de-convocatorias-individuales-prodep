function Region(idRegion, nombre){
	this.idRegion = idRegion;
	this.nombre = nombre;
}

function Area(idArea, nombre){
	this.idArea = idArea;
	this.nombre = nombre;
}

function EntidadEducativa(idEntidadEducativa, nombre){
	this.idEntidadEducativa = idEntidadEducativa;
	this.nombre = nombre;
}

function Convocatoria(idConvocatoria, nombre){
	this.idConvocatoria = idConvocatoria;
	this.nombre = nombre;
}

function Docente(idDocente, nombre, numeroPersonal){
	this.idDocente = idDocente;
	this.nombre = nombre;
	this.numeroPersonal = numeroPersonal;
}

function Proyecto(idProyecto,docente, claveProdep){
	this.idProyecto = idProyecto;
	this.docente = docente;
	this.claveProdep = claveProdep;
}

