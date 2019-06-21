<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuevo coordinador</title>
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('css/inicioSesion_style.css');?>" type="text/css">
</head>
<body>
    <img src="<?=base_url('recursos/prodep.svg');?>" class="logoRegistro"/>
    <div class="center">
        <img src="<?=base_url('recursos/usuario.svg');?>" class="imgUsuario"/>
        <h1>Registro de usuarios</h1>
    </div>
    <form class="margenSuperior">
        <input type="text" name="txtNombre" placeholder="Nombre" class="datosRegistro form-control center-div" required/>
        <input type="email" name="txtCorreo" placeholder="Correo" class="datosRegistro form-control center-div"/>
        <input type="text" name="txtUsuario" placeholder="Usuario" class="datosRegistro form-control center-div" required/>
        <input type="password" name="txtContrasena" placeholder="Contraseña" class="datosRegistro form-control center-div" required/>
        <input type="password" name="txtConfirmar" placeholder="Confirmar" class="datosRegistro form-control center-div" required/>
        <div class="center margenSuperior">
                <input type="submit" name="btnRegistrar" value="Registrar" class="datosUsuario btn btn-success inline"/>
                <a href="<?=base_url();?>index.php/usuarioController/vista/login"><input type="button" name="btnCancelar" value="Cancelar" class="datosUsuario btn btn-danger inline"/></a>
        </div>
    </form>
</body>
</html>