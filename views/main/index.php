<!DOCTYPE html>
<html>
<?php require 'views/header.php' ?>
<body>
	<script src="/proyecto/public/angular/angular.js"></script>
	<script src="/proyecto/public/angular/appModule.js"></script>
	<script src="/proyecto/public/angular/main/mainCtrl.js"></script>
	<?php require 'views/nav.php' ?>
	<?php require 'views/navside.php' ?>
	


	<!-- PAGINA PRINCIPAL DEL SITIO WEB-->
	<div class="container" ng-app="miApp" ng-controller="mainCtrl">
		
		<!-- ESTO ES UN DIV QUE CONTIENE UN CARRUSEL, ES DECIR, UN SLIDER CON TRES IMAGENES PARA REPRESENTAR UN POCO NUESTRA PAGINA-->
		<div id="carouselExampleIndicators" ng-hide="carrusel" class="carousel slide d-none d-md-block" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="public/imagenes/slider3.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="public/imagenes/slider1.jpg" alt="Second slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<!-- SECCION DONDE PUEDES SELECCIONAR CATEGORIA, SIMILAR AL NAVSIDE PERO SOLO SE MUESTRA EN DISPOSITIVOS PEQUEÑOS, CON LA IDEA DE QUE LA PAGINA SEA MAS RESPONSIVE-->
		<?php include 'dropdownCategoria.php'; ?>
		
		
		<!-- CAMPO DE BUSQUEDA DE PRODUCTOS-->
		<div class="form-group" id="buscar">
			<input type="text" class="form-control-plaintext col-12 " placeholder="Buscar producto.." ng-keyup="buscar()" ng-model="buscarItem">
		</div>
		

		<!-- CAPA EN LA CUAL SE MUESTRAN LOS 4 ULTIMOS PRODUCTOS SUBIDOS A LA BASE DE DATOS-->
		<div class="apartados" id="novedades" ng-hide="novedadesCapa">
			<h3>Novedades</h3>
			

			
			<div class="row" id="novedadesDestacado">
				<div ng-repeat="x in items" class="col-6 col-lg-4 encima">
					<div class="lastItems" >
						<a href="producto/detallesProducto/{{x.id_producto}}" ng-click="storage(x.subcategoria)">
							<img class="col-12" src="{{x.imagen}}">
							<p>{{x.nombre}}</p>
							<p class="precio">{{x.precio}}€</p>
						</a>
						
						
					</div>
				
				</div>
			</div>
		</div>
		<hr>

		<!-- CAPA EN LA CUAL SE MUESTRAN LOS PRODUCTOS CUYA CATEGORIA ES DE ORDENADOR-->
		<div class="apartados" id="ordenadores" ng-hide="ordenadoresCapa">
			<h3>Ordenadores</h3>

			<div class="row">
				<div ng-repeat="x in ordenadores" class="col-6 col-lg-3 encima">
					<div class="lastItems" >
						<a href="producto/detallesProducto/{{x.id_producto}}" ng-click="storage(x.subcategoria)"> 
							<img class="col-12" src="{{x.imagen}}">
							<p>{{x.nombre}}</p>
							<p class="precio">{{x.precio}}€</p>
						</a>
						
						
					</div>
				
				</div>
			</div>
		</div>
		<hr>
		<!-- CAPA EN LA CUAL SE MUESTRAN LOS PRODUCTOS CUYA CATEGORIA ES DE MOVILES-->
		<div class="apartados" id="moviles" ng-hide="movilesCapa">
			<h3>Móviles</h3>
			<div class="row">
				<div ng-repeat="x in moviles" class="col-6 col-lg-3 encima">
					<div class="lastItems" >
						<a href="producto/detallesProducto/{{x.id_producto}} " ng-click="storage(x.subcategoria)">
							<img class="col-12" src="{{x.imagen}}">
							<p>{{x.nombre}}</p>
							<p class="precio">{{x.precio}}€</p>
						</a>
						
						
					</div>
				
				</div>
			</div>
		</div>
		<hr>

		<!-- CAPA EN LA CUAL SE MUESTRAN LOS PRODUCTOS CUYA CATEGORIA ES DE PERIFERICOS-->
		<div class="apartados" id="perifericosCapa" ng-hide="perifericosCapa">
			<h3>Periféricos</h3>
			<div class="row">
				<div ng-repeat="x in perifericoss" class="col-6 col-lg-3 encima">
					<div class="lastItems" >
						<a href="producto/detallesProducto/{{x.id_producto}}" ng-click="storage(x.subcategoria)">
							<img class="col-12" src="{{x.imagen}}">
							<p>{{x.nombre}}</p>
							<p class="precio">{{x.precio}}€</p>
						</a>
						
						
					</div>
				
				</div>
			</div>
		</div>
		<hr>

		

		<!-- CAPA EN LA CUAL SE MUESTRAN LOS PRODUCTOS SEGUN LA SECCION QUE SE HAYA CONSULTADO O LA BUSQUEDA QUE SE HAYA REALIZADO-->
		<div id="todo" ng-show="all">
			<h3>Resultados de la búsqueda!</h3>
			<div class="row">
				<div ng-repeat="x in todo | filter: busqueda" class="col-6 col-lg-3">
					<div class="lastItems" >
						<a href="producto/detallesProducto/{{x.id_producto}}" ng-click="storage(x.subcategoria)">
							<img class="col-12" src="{{x.imagen}}">
							<p>{{x.nombre}}</p>
							<p class="precio">{{x.precio}}€</p>
						</a>
						
						
					</div>
				
				</div>
			</div>
		</div>

		<!-- CAPA EN LA CUAL SE MUESTRAN LOS PRODUCTOS RELACIONADOS CON LOS QUE EL USUARIO HA VISITADO, EMPLEANDO LOCALSTORAGE, ALMACENAMIENTO LOCAL-->
		<div class="apartados" id="interes" ng-show="interes">
			<h3>Sugerencias</h3>
			<div class="row">
				<div ng-repeat="x in relacion" class="col-6 col-lg-3 encima">
					<div class="lastItems" >
						<a href="producto/detallesProducto/{{x.id_producto}}">
							<img class="col-12" src="{{x.imagen}}">
							<p>{{x.nombre}}</p>
							<p class="precio">{{x.precio}}€</p>
						</a>
						
						
					</div>
				
				</div>
			</div>
		</div>



		<?php require 'views/footer.php' ?>
	</div>

	

	
</body>
</html>