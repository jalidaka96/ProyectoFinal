<div class="dropdown show d-md-none" id="dropdownCategoria">
	<a class="btn btn-secondary dropdown-toggle col-12" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Selecciona categoria
	</a>

	<div class="dropdown-menu col-12" aria-labelledby="dropdownMenuLink">
		<a class="dropdown-item" href="" ng-click="dropdownOrdenadores()">Ordenadores</a>
		<a class="dropdown-item" href="" ng-click="dropdownMoviles()">Moviles</a>
		<a class="dropdown-item" href="" ng-click="dropdownPerifericos()">Perifericos</a>
	</div>
</div>


<div class="dropdown show d-md-none" id="dropdownSubcategoriaO" ng-show="dropdownSubcategoriaOrdenadores">
	<a class="btn btn-secondary dropdown-toggle col-12" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Selecciona subcategoria
	</a>

	<div class="dropdown-menu col-12" aria-labelledby="dropdownMenuLink">
		<a class="dropdown-item" href="" ng-click="portatiles()">Portatiles</a>
		<a class="dropdown-item" href="" ng-click="deMesa()">De Mesa</a>
	</div>
</div>

<div class="dropdown show d-md-none" id="dropdownSubcategoriaM" ng-show="dropdownSubcategoriaMoviles">
	<a class="btn btn-secondary dropdown-toggle col-12" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Selecciona subcategoria
	</a>

	<div class="dropdown-menu col-12" aria-labelledby="dropdownMenuLink">
		<a class="dropdown-item" href="" ng-click="android()">Android</a>
		<a class="dropdown-item" href="" ng-click="ios()">Ios</a>
	</div>
</div>

<div class="dropdown show d-md-none" id="dropdownSubcategoriaP" ng-show="dropdownSubcategoriaPerifericos">
	<a class="btn btn-secondary dropdown-toggle col-12" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Selecciona subcategoria
	</a>

	<div class="dropdown-menu col-12" aria-labelledby="dropdownMenuLink">
		<a class="dropdown-item" href="" ng-click="monitores()">Monitores</a>
		<a class="dropdown-item" href="" ng-click="teclados()">Teclados</a>
		<a class="dropdown-item" href="" ng-click="ratones()">Ratones</a>
		<a class="dropdown-item" href="" ng-click="impresoras()">Impresoras</a>
		<a class="dropdown-item" href="" ng-click="altavoces()">Altavoces</a>
	</div>
</div>