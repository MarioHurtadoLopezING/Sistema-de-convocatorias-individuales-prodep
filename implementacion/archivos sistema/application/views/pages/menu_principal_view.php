<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	<title>Pagina principal</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script> 
	<link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css');?>" type="text/css">
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 
	<link rel="stylesheet" href="<?=base_url('css/menuPrincipal_style.css');?>" type="text/css">
	<link rel="stylesheet" href="<?=base_url('css/proyecto_style.css');?>" type="text/css">
</head>
<body>
	<header id="cabecera">
		<div id="tituloPagina">
			<h2>Proyectos registrados</h2>
		</div>
		<div id="nombreUsuario">
			<span class="esconder">Mario Hurtado López</span>
		</div>
		<div id="fotoUsuario">
			<img src="<?=base_url('recursos/usuario.svg')?>">
		</div>
	</header>
	<div id="separador"></div>
	<div id="menu">
		<img src="<?=base_url('recursos/prodep.png')?>">
		<div class="menuElemento separadorMenuImagen" id="divProyecto" data-toggle="modal" data-target="#login">
			<div class="textoElementoMenu"><span class="esconder">Proyectos</span></div>
			<div class="imagenElementoMenu"><img src="<?=base_url('recursos/proyecto.svg')?>"></div>
		</div>
		<div class="menuElemento">
			<div class="textoElementoMenu"><span class="esconder">Convocatorias</span></div>
			<div class="imagenElementoMenu"><img src="<?=base_url('recursos/cuaderno.svg')?>"></div>
		</div>
		<div class="menuElemento">
			<div class="textoElementoMenu"><span class="esconder">Oficios</span></div>
			<div class="imagenElementoMenu"><img src="<?=base_url('recursos/contrato.svg')?>"></div>
		</div>
		<div class="menuElemento">
			<div class="textoElementoMenu"><span class="esconder">Registros</span></div>
			<div class="imagenElementoMenu"><img src="<?=base_url('recursos/anadir.svg')?>"></div>
		</div>
		<div class="menuElemento menuElementoSalir">
			<div class="textoElementoMenu"><span class="esconder">Salir</span></div>
			<div class="imagenElementoMenu"><img src="<?=base_url('recursos/logout.svg')?>"></div>
		</div>
	</div>
	<div id="separadorMenu">
	</div>
	<!--Modal de proyectos -->
	<div id="login" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title center">Proyectos</h4>
				</div>
					<div class="modal-body center">
						<div class="item">
							<div class="center">
								<img src="<?=base_url('recursos/agregar-documento.svg')?>" class="iconoItem">
							</div>						
							<span class="center">agregar proyecto</span>
						</div>

						<div class="item">
							<div class="center">
								<img src="<?=base_url('recursos/lupa-para-buscar.svg')?>" class="iconoItem">
							</div>
							<span class="center">consultar registros</span>
						</div>   
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<!--Modal de proyectos -->
