miApp.controller("mainCtrl", function($scope, $http) {
	/*$.ajax({
		url: '/proyecto/producto/mostrarProductoUltimos/',
		type: 'post',
		success: function(response) {
			console.log(response);
			
			
		}
	})*/

	
	$http.get('/proyecto/producto/mostrarProductoUltimos/')
	.then(function(resp) {
		//console.log(resp.data);
		$scope.items = resp.data;
	})


	var jsonOrdenadores = {
			categoria : 'ordenadores'
		};

	$http.get('/proyecto/producto/mostrarProductoUltimosCategoria/',  {
			params: jsonOrdenadores
		})
	.then(function(resp) {
		//console.log(resp.data);
		$scope.ordenadores = resp.data;
	})


	var jsonMoviles = {
			categoria : 'moviles'
		};

	$http.get('/proyecto/producto/mostrarProductoUltimosCategoria/',  {
			params: jsonMoviles
		})
	.then(function(resp) {
		//console.log(resp.data);
		$scope.moviles = resp.data;
	})


	var jsonPerifericos = {
			categoria : 'perifericos'
		};

	$http.get('/proyecto/producto/mostrarProductoUltimosCategoria/',  {
			params: jsonPerifericos
		})
	.then(function(resp) {
		//console.log(resp.data);
		$scope.perifericoss = resp.data;
	})

	var jsonTodo = {
			categoria : ''
		};

	$http.get('/proyecto/producto/mostrarProductos/',  {
			params: jsonTodo
		})
	.then(function(resp) {
		//console.log(resp.data);
		$scope.todo = resp.data;
	})
	var storage = localStorage;
	$scope.storage = function(subcategoria) {
		

		storage.setItem("item", subcategoria);

	}

	if (storage.getItem("item")) {
		var item = storage.getItem("item");
		//console.log(item)

		var jsonSubcategoria = {
			subcategoria : item
		};

		$http.get('/proyecto/producto/mostrarPorSubcategoria/',  {
				params: jsonSubcategoria
			})
		.then(function(resp) {
			console.log(resp.data);
			$scope.relacion = resp.data;
			$scope.interes = true;
		})

	}

	//METODO DE SUSTITUCION

	$scope.sustitucion = function($capa) {
		$scope.all = true;
		$scope.novedadesCapa = true;
		$scope.ordenadoresCapa = true;
		$scope.movilesCapa = true;
		$scope.perifericosCapa = true;
	}

	//CATEGORIA ORDENADORES
	$scope.portatiles = function() {
		$scope.sustitucion();
		$scope.busqueda = "-Portatiles-";
		$scope.carrusel = true;
	}

	$scope.deMesa = function() {
		$scope.sustitucion();
		$scope.busqueda = "-De Mesa-";
		$scope.carrusel = true;
	}

	//CATEGORIA MOVILES
	$scope.android = function() {
		$scope.sustitucion();
		$scope.busqueda = "-Android-";
		$scope.carrusel = true;
	}

	$scope.ios = function() {
		$scope.sustitucion();
		$scope.busqueda = "-IOS-";
		$scope.carrusel = true;
	}

	

	//CATEGORIA PERIFERICOS

	$scope.monitores = function() {
		$scope.sustitucion();
		$scope.busqueda = "-Monitores-";
		$scope.carrusel = true;
	}

	$scope.teclados = function() {
		$scope.sustitucion();
		$scope.busqueda = "-Teclados-";
		$scope.carrusel = true;
	}

	$scope.ratones = function() {
		$scope.sustitucion();
		$scope.busqueda = "-Ratones-";
		$scope.carrusel = true;
	}

	$scope.impresoras = function() {
		$scope.sustitucion();
		$scope.busqueda = "-Impresoras-";
		$scope.carrusel = true;
	}

	$scope.altavoces = function() {
		$scope.sustitucion();
		$scope.busqueda = "-Altavoces-";
		$scope.carrusel = true;
	}


	$scope.buscar = function() {
		$scope.sustitucion();
		$scope.busqueda = $scope.buscarItem;
	}
	

	$scope.migasCategoria = function($categoria) {
		var jsonTodo = {
			categoria : $categoria
		};

		$http.get('/proyecto/categoria/migasCategoria/',  {
				params: jsonTodo
			})
		.then(function(resp) {
			console.log(resp.data);
			//$scope.todo = resp.data;
		})
	}



	$scope.dropdownOrdenadores = function() {
		$scope.dropdownSubcategoriaOrdenadores = true;
		$scope.dropdownSubcategoriaMoviles = false;
		$scope.dropdownSubcategoriaPerifericos = false;
	}

	$scope.dropdownMoviles = function() {
		$scope.dropdownSubcategoriaOrdenadores = false;
		$scope.dropdownSubcategoriaMoviles = true;
		$scope.dropdownSubcategoriaPerifericos = false;
	}

	$scope.dropdownPerifericos = function() {
		$scope.dropdownSubcategoriaOrdenadores = false;
		$scope.dropdownSubcategoriaMoviles = false;
		$scope.dropdownSubcategoriaPerifericos = true;
	}




	


})