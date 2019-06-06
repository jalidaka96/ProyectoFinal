<!DOCTYPE html>
<html>
<?php require 'views/header.php' ?>
<script src="/proyecto/public/angular/angular.js"></script>
<script src="/proyecto/public/angular/appModule.js"></script>
<script src="/proyecto/public/angular/log/logCtrl.js"></script>
<body>
	<?php require 'views/nav.php' ?>

	<div class="container" ng-app="miApp" ng-controller="logCtrl">
		<h2>SISTEMA DE LOG</h2>

		<table class="table">
			<tr>
				<th>Indice</th>
				<th>Detalle</th>
				<th>Ubicacion</th>
				<th>Usuario</th>
				<th>Fecha</th>
			</tr>
			<tr ng-repeat="x in log"> 
				<th>{{x.id_log}}</th>
				<th>{{x.detalle}}</th>
				<th>{{x.ubicacion}}</th>
				<th>{{x.usuario}}</th>
				<th>{{x.fecha_publicacion}}</th>
			</tr>
		</table>


	</div>

</body>
</html>