<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/proyecto/public/css/login.css">
	<script src="/proyecto/public/angular/angular.js"></script>
	<script src="/proyecto/public/angular/appModule.js"></script>
	<script src="/proyecto/public/angular/login/loginCtrl.js"></script>
</head>
<body ng-app="miApp" ng-controller="loginCtrl">
	<?php require 'views/header.php' ?>
	<?php require 'views/nav.php' ?>

	<!-- PAGINA CON UN FORMULARIO DE INICIO DE SESION-->
	<div class="container">
		<div id="login" class="col-md-7 col-lg-6 offset-md-3" ng-submit="login()">
			<div>
				<h2>Iniciar sesión</h2>
				<hr>
			</div>
			<form >
				<div class="form-group">
					<label>Nombre de usuario:</label>
					<input type="text" class="form-control" placeholder="Introduzca el email..." ng-model="usuario" >
					<p ng-style="confirmStyleU">{{confirmUsuario}}</p>
				</div>
				<div class="form-group">
					<label>Contraseña:</label>
					<input type="password" class="form-control" placeholder="Introduzca la contraseña..." ng-model="password" >
					<p ng-style="confirmStyleP">{{confirmPassword}}</p>
					
				</div>	
				<p ng-show="loginEnviando">Enviando</p>
				{{enviando}}
				{{loginError}}
				
				<div class="form-group form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input">Mantener sesión
					</label>
				</div>
				<button  type="submit" class="btn btn-primary col-6  col-md-4 offset-3 offset-md-4" >Iniciar sesion</button>
				
			</form>
		</div>

		

	</div>

	</div>

	
</body>
</html>