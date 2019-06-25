<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Inicio sesión</title>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script> 
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css');?>" type="text/css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="<?=base_url('css/inicioSesion_style.css');?>" type="text/css">
</head>
<body>
    <div>
        <img src="<?=base_url('recursos/prodep.png')?>" class="logo"/>
        <h1  class="center">Iniciar sesión</h1>
    </div>
    <form>
        <input type="text" name="txtUsuario" placeholder="Usuario" class="form-control datosUsuario margenSuperior" />
        <input type="password" name="txtContrasena" placeholder="Contraseña" class="form-control datosUsuario" />
         <a href="<?=base_url();?>index.php/usuarioController/vista/menuPrincipal"><input type="button" name="btnIniciarSesion" value="Ingresar" class="datosUsuario btn btn-success margenSuperior"/></a>
    </form>
    <div id="divRegistroUsuario" class="center margenSuperior">
        <a href="<?=base_url();?>index.php/usuarioController/vista/registrarUsuario">Crear cuenta.</a>
    </div>
</body>
</html>