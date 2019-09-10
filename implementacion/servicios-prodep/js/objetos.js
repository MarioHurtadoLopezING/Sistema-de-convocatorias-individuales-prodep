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

function Destinatario(idDestinatario, nombre){
	this.idDestinatario = idDestinatario;
	this.nombre = nombre;
}

function Oficio(idOficio,añoConvocatoria, asunto, docente, fechaEnvio, folioProdep, monto){
	this.idOficio = idOficio;
	this.añoConvocatoria = añoConvocatoria;	
	this.asunto = asunto;
	this.docente = docente;
	this.fechaEnvio = fechaEnvio;
	this.folioProdep = folioProdep;
	this.monto = monto;
}

function Convocatoria(idConvocatoria, proyecto, anoConvocatoria, estado, fechaVoBo){
	this.idConvocatoria = idConvocatoria;
	this.proyecto = proyecto;
	this.anoConvocatoria = anoConvocatoria;
	this.estado = estado;
	this.fechaVoBo = fechaVoBo;
}