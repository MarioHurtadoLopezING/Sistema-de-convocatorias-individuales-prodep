<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuevo coordinador</title>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script> 
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css');?>" type="text/css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="<?=base_url('css/inicioSesion_style.css');?>" type="text/css">
</head>
<body>
    <img src="<?=base_url('recursos/prodep.png');?>" class="logoRegistro"/>
    <div class="center">
        <img src="<?=base_url('recursos/usuario.svg');?>" class="imgUsuario"/>
        <h1>Registro de usuarios</h1>
    </div>
    <?php echo form_open('UsuarioController/registrarPersonal', array('id'=>'registrarPersonal','class' =>'margenSuperior'))?>
        <input type="text" name="nombre" placeholder="Nombre" class="datosRegistro form-control center-div" required/>
        <input type="email" name="correo" placeholder="Correo" class="datosRegistro form-control center-div"/>
        <input type="text" name="usuario" placeholder="Usuario" class="datosRegistro form-control center-div" required/>
        <input type="password" name="contrasena" placeholder="Contraseña" class="datosRegistro form-control center-div" required/>
        <input type="password" name="confirmar" placeholder="Confirmar" class="datosRegistro form-control center-div" required/>
        <div class="center margenSuperior">
                <input type="submit" name="btnRegistrar" value="Registrar" class="datosUsuario btn btn1 btn-success inline"/>
                <a href="<?=base_url();?>index.php/usuarioController/vista/login"><input type="button" name="btnCancelar" value="Cancelar" class="datosUsuario btn btn-danger inline btn1"/></a>
        </div>
    </form>
</body>
</html>