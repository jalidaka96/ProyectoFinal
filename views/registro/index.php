
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="/proyecto/public/css/registrar.css">
	
</head>
<body id="cuerpoRegistrar">
	<?php require 'views/header.php' ?>
	<?php require 'views/nav.php' ?>

	<!-- ESTA PAGINA CONTIENE EL FORMULARIO DE REGISTRO DE UN USUARIO-->
	<div class="container" >
		<div id="registrar" class="col-md-7 col-lg-6 offset-md-3">
			<div>
				<h2>Registrar</h2>
				<hr>
			</div>
			<form >
				<div class="form-group">
					<label>Nombre:</label>
					<input type="text" class="form-control confirmar"  placeholder="Introduzca su nombre..." id="nombre"  minlength="2">
					<p id="nombreError"></p>
				</div>
				<div class="form-group">
					<label>Apellido</label>
					<input type="text" class="form-control confirmar" placeholder="Introduzca su apellido..."  id="apellido">
					<p id="apellidoError"></p>
				</div>	
				<div class="form-group">
					<label>Correo electrónico</label>
					<input type="email" class="form-control confirmar" placeholder="Introduzca su correo..." id="correo" >
					<p id="emailError"></p>
				</div>
				<div class="form-group">
					<label>Teléfono</label>
					<input type="tel" class="form-control" placeholder="Introduzca su teléfono" id="telefono" >
					<p id="telefonoError"></p>
				</div>
				<div class="form-group">
					<label>Fecha de nacimiento</label>
					<input type="date" class="form-control"  id="fecha_nac">
					<p id="fechaError"></p>
				</div>
				<div class="form-group">
					<label>Nombre de usuario</label>
					<input type="text" class="form-control" placeholder="Introduzca un nombre de usuario..." id="usuario">
					<p id="usuarioError"></p>
				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<input type="password" class="form-control" placeholder="Introduzca una contraseña..." id="password">
					<p id="passwordError"></p>
				</div>
				<!-- SE DEBE REPETIR LA CONTARSEÑA Y QUE COINCIDAN-->
				<div class="form-group">
					<label></label>
					<input type="password" class="form-control" placeholder="Vuelva a repetir la contraseña! " id="repassword">
					<p id="repasswordError"></p>
				</div>

				<p id="vacios"></p>

				<div class="form-group">
					<p id="recargar"></p>
					<label>Recargar captcha</label>
					<a class="btn btn-primary" id="recargarCaptcha"><span class="glyphicon glyphicon-refresh"></span></a><br><br>

					<input type="text" class="form-control" id="captcha" placeholder="Introduzca el captcha" >
					<p id="errorCaptcha"></p>
				</div>

				
				

				

				<button id="registrarBoton" type="submit"  class="btn btn-primary col-6  col-md-4 offset-3 offset-md-4">Registrar</button>

				<p id="errorInesperado"></p>
			</form>
			

		</div>
		
		
	</div>

	</div>

	<script src="/proyecto/public/js/registro.js"></script>

	
</body>
</html>