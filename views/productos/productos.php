<hr><br><br>
<!--AQUI SE VAN A MOSTRAR LOS 5 ULTIMOS PRODUCTOS SUBIDOS-->

<div class="input-group">
	<input type="text" class="form-control form-text" placeholder="Buscar.." ng-model="busquedaItem" ng-show="busquedaItemH">
</div><br><br><hr>

<!-- CAPA PARA MOSTRAR LOS ULTIMOS PRODUCTOS SUBIDOS A LA BASE DE DATOS-->
<div ng-show="productosUltimos">
	
	<h4>Ultimos productos actualizados</h4>
	<hr>
	<table ng-show="tabla" class="table table-striped table-hover">
		<tr>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Categoria</th>
			<th>Subcategoria</th>
		</tr>
		<tr ng-repeat="item in items | filter : busquedaItem  track by $index ">
			<td>{{item.nombre}}</td>
			<td>{{item.precio}}</td>
			<td>{{item.categoria}}</td>
			<td>{{item.subcategoria}}</td>
			<td>
				<button class="btn btn-primary" ng-click="config_item(item.id_producto)"><span class="glyphicon glyphicon-cog"></span></button>
			</td>
		</tr>
	</table>	
	<p ng-show="vacio">No hay resultados!</p>
	
	<hr><br>
	
</div>



<!--AQUI SE VAN A MOSTRAR LOS PRODUCTOS QUE PERTENECEN A LA CATEGORIA ORDENADORES-->
<div ng-show="productosOrdenadores">
	<h4>Categoria ordenadores</h4>
	
	<hr><br>
	<table ng-show="tablaO" class="table table-striped table-hover">
		<tr>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Subcategoria</th>
		</tr>
		<tr ng-repeat="item in itemsO | filter : busquedaItem track by $index">
			<td>{{item.nombre}}</td>
			<td>{{item.precio}}</td>
			<td>{{item.subcategoria}}</td>
			<td>
				<button class="btn btn-primary" ng-click="config_item(item.id_producto)"><span class="glyphicon glyphicon-cog"></span></button>
			</td>
		</tr>
	</table>
	<p ng-show="vacioO">No hay resultados!</p>
</div>


<!--AQUI SE VAN A MOSTRAR LOS PRODUCTOS QUE PERTENECEN A LA CATEGORIA MOVILES-->
<div ng-show="productosMoviles">
	<h4>Categoria moviles</h4>
	
	<hr><br>
	<table ng-show="tablaM" class="table table-striped table-hover">
		<tr>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Subcategoria</th>
		</tr>
		<tr ng-repeat="item in itemsM | filter : busquedaItem track by $index">
			<td>{{item.nombre}}</td>
			<td>{{item.precio}}</td>
			<td>{{item.subcategoria}}</td>
			<td>
				<button class="btn btn-primary" ng-click="config_item(item.id_producto)"><span class="glyphicon glyphicon-cog"></span></button>
			</td>
		</tr>
	</table>
	<p ng-show="vacioM">No hay resultados!</p>
</div>

<!--AQUI SE VAN A MOSTRAR LOS PRODUCTOS QUE PERTENECEN A LA CATEGORIA PERIFERICOS-->
<div ng-show="productosPerifericos" ng-click="categoriaP()">
	<h4>Categoria perifericos</h4>
	
	<hr><br>
	<table class="table table-striped table-hover" ng-show="tablaP">
		<tr>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Subcategoria</th>
		</tr>
		<tr ng-repeat="item in itemsP | filter : busquedaItem track by $index">
			<td>{{item.nombre}}</td>
			<td>{{item.precio}}</td>
			<td>{{item.subcategoria}}</td>
			<td>
				<button class="btn btn-primary" ng-click="config_item(item.id_producto)"><span class="glyphicon glyphicon-cog"></span></button>
			</td>
		</tr>
	</table>
	<p ng-show="vacioP">No hay resultados!</p>
	
</div>