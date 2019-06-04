miApp.controller("adminCtrl", function($scope, $http) {
	//FUNCIONES ANGULAR PARA LA GESTION DE USUARIOS
	$scope.usuariosMenu = function() {
		$scope.productoShow = false;
		$scope.usuarioShow = true;
		$scope.detallesShow = false;
		$scope.principal = true;
		$scope.principalGButon = true;
		$scope.principalGP = true;
		$scope.principalGU = false;
		$scope.detallesItem = false;
		$scope.confirmarDelete = false;

		

		$http.get('/proyecto/admin/mostrarUsuarios/')
		.then(function(resp) {
			$scope.usuarios = resp.data;
		})

		/*$.ajax({
			url: '/proyecto/admin/mostrarUsuarios/',
			type: 'post',
			success: function(response) {
				console.log(response);
				
				
			}
		})*/
	}

	$scope.principalButon = function() {
		$scope.productoShow = false;
		$scope.usuarioShow = false;
		$scope.principal = false;
		$scope.principalGButon = false;
		$scope.principalGP = false;
		$scope.principalGU = false;
		$scope.detallesShow = false;
		$scope.detallesItem = false;
	}

	$scope.atrasP = function() {
		$scope.detallesItem = false;
		$scope.productoShow = true;
	}

	$scope.atrasU = function() {
		$scope.detallesShow = false;
		$scope.usuarioShow = true;
	}



	$scope.config_user = function($usuarioX) {
		$scope.usuarioShow = false;
		$scope.detallesShow = true;
		var jsonUsuario = {
			usuario : $usuarioX
		};

		$http.get('/proyecto/admin/mostrarDetallesUsuario/', {
			params: jsonUsuario
		})
		.then(function(resp) {
			$scope.detalleUsuario = resp.data;
			$scope.user = resp.data.usuario;
		})

		
		
	}

	

	$scope.modificar = function(indice) {
		$scope.nombreP = indice;
		$scope.nombreM = indice;

		$scope.apellidoP = indice;
		$scope.apellidoM = indice;

		$scope.usuarioP = indice;
		$scope.usuarioM = indice;

		$scope.telefonoP = indice;
		$scope.telefonoM = indice;

		$scope.correoP = indice;
		$scope.correoM = indice;

		$scope.fecha_nacP = indice;
		$scope.fecha_nacM = indice;

		$scope.guardar = indice;
		$scope.modificarH = indice;
		$scope.eliminarH = indice;
	}

	$scope.guardarCambios = function() {
		
		$scope.changesJson = {
			nombre : $scope.detalleUsuario.nombre,
			apellido : $scope.detalleUsuario.apellido,
			usuario : $scope.detalleUsuario.usuario,
			telefono : $scope.detalleUsuario.telefono,
			email : $scope.detalleUsuario.email,
			fecha_nac : $scope.detalleUsuario.fecha_nac,
			user : $scope.user
		}

		console.log($scope.changesJson)

		$.ajax({
			data: $scope.changesJson,
			url: '/proyecto/admin/modificarUsuario/',
			type: 'post',
			success: function(response) {
				console.log(response);
				$scope.modificar(false);
				$scope.config_user($scope.detalleUsuario.usuario);
				
			}
		})

		/*$http.post('/proyecto/admin/modificarUsuario/', {
			params: $scope.changesJson
		})
		.then(function(resp){
			console.log(resp.data)
		});*/
	}

	$scope.eliminar = function() {
		$scope.param = {
			usuario : $scope.user
		}

		$.ajax({
			data: $scope.param,
			url: '/proyecto/admin/darBaja/',
			type: 'post',
			success: function(response) {
				console.log(response);
				$scope.usuariosMenu();
				
			}
		})

	}





	//FUNCIONES DE ANGULAR PARA LA GESTION DE PRODUCTOS
	$scope.productosMenu = function() {
		$scope.usuarioShow = false;
		$scope.productoShow = true;
		$scope.detallesShow = false;
		$scope.principal = true;
		$scope.principalGButon = true;
		$scope.principalGU = true;
		$scope.principalGP = false;
		$scope.productosUltimos = false;
		$scope.productosOrdenadores = false;
		$scope.productosMoviles = false;
		$scope.productosPerifericos = false;
		$scope.categoriaOr = false;
		$scope.categoriaMo = false;
		$scope.categoriaPe = false;
		$scope.mostrarTodos = false;
		$scope.detallesItem = false	;
		$scope.confirmarDelete = false;

	}

	$scope.subirButon = function() {
		location.href = 'producto'
	}

	$scope.mostrarProductos = function() {
		$scope.productosUltimos = true;
		$scope.mostrarTodos = true;
		$scope.categoriaOr = true;
		$scope.categoriaMo = true;
		$scope.categoriaPe = true;
		$scope.busquedaItemH = true;
		$scope.datos = {
			categoria : ''
		}

		

		$http.get('/proyecto/producto/mostrarProductos/', {
			params: $scope.datos
		})
		.then(function(resp) {
			if (resp.data == "0 results") {
				$scope.vacio = true;
			} else {
				$scope.items = resp.data;
				console.log($scope.items)
				$scope.tabla = true;
			}
		})
	}

	$scope.todos = function() {
		$scope.productosUltimos = true;
		$scope.productosOrdenadores = false;
		$scope.productosMoviles = false;
		$scope.productosPerifericos = false;
		$scope.busquedaItem = '';
	}

	$scope.categoriaO = function() {
		$scope.productosOrdenadores = true;
		$scope.productosMoviles = false;
		$scope.productosPerifericos = false;
		$scope.productosUltimos = false;
		$scope.busquedaItem = '';
		$scope.datos = {
			categoria : 'ordenadores'
		}

		$http.get('/proyecto/producto/mostrarProductos/', {
			params: $scope.datos
		})
		.then(function(resp) {
			if (resp.data == "0 results") {
				$scope.vacioO = true;
			} else {
				$scope.itemsO = resp.data;
				$scope.tablaO = true;
			}
		})
	}

	$scope.categoriaM = function() {
		$scope.productosOrdenadores = false;
		$scope.productosMoviles = true;
		$scope.productosPerifericos = false;
		$scope.productosUltimos = false;
		$scope.busquedaItem = '';
		$scope.datos = {
			categoria : 'moviles'
		}

		$http.get('/proyecto/producto/mostrarProductos/', {
			params: $scope.datos
		})
		.then(function(resp) {
			if (resp.data == "0 results") {
				$scope.vacioM = true;
			} else {
				$scope.itemsM = resp.data;
				$scope.tablaM = true;
			}
		})
	}

	$scope.categoriaP = function() {
		$scope.productosOrdenadores = false;
		$scope.productosMoviles = false;
		$scope.productosPerifericos = true;
		$scope.productosUltimos = false;
		$scope.busquedaItem = '';
		$scope.datos = {
			categoria : 'perifericos'
		}

		$http.get('/proyecto/producto/mostrarProductos/', {
			params: $scope.datos
		})
		.then(function(resp) {
			if (resp.data == "0 results") {
				$scope.vacioP = true;
			} else {
				$scope.itemsP = resp.data;
				$scope.tablaP = true;
			}
		})
	}

	$scope.modificarItem = function(indice) {
		$scope.itemNombreP = indice;
		$scope.itemNombreM = indice;

		$scope.itemDetalleP = indice;
		$scope.itemDetalleM = indice;

		$scope.itemPrecioP = indice;
		$scope.itemPrecioM = indice;

		$scope.itemCategoriaP = indice;
		$scope.itemCategoriaM = indice;

		$scope.itemSubcategoriaP = indice;
		$scope.itemSubcategoriaM = indice;

		$scope.modificarItemP = indice;
		$scope.eliminarItem = indice;
		$scope.guardarModificacionItem = indice;
	}

	$scope.config_item = function($producto) {
		$scope.productoShow = false;
		$scope.detallesItem = true;
		var jsonProducto = {
			producto : $producto
		};

		$http.get('/proyecto/producto/mostrarDetallesProducto/', {
			params: jsonProducto
		})
		.then(function(resp) {
			$scope.detalleProducto = resp.data;
			$scope.detalleProductoId = $scope.detalleProducto.id_producto;
		})
	}

	$scope.guardarCambiosItem = function() {
		$scope.listaItems = {
			id_producto : $scope.detalleProductoId,
			nombre : $scope.detalleProducto.nombre,
			detalle : $scope.detalleProducto.detalle,
			precio : $scope.detalleProducto.precio,
			categoria : $scope.detalleProducto.categoria,
			subcategoria : $scope.detalleProducto.subcategoria
		}
		

		$.ajax({
			data: $scope.listaItems,
			url: '/proyecto/producto/modificarProducto/',
			type: 'post',
			success: function(response) {
				$scope.modificarItem(false);
				$scope.config_item($scope.detalleProductoId);
				$scope.confirmarDelete = false;
			}
		})

		

	}

	$scope.confirmarEliminar = function() {
		$scope.confirmarDelete = true;
	}

	$scope.cancelarEliminar = function() {
		$scope.confirmarDelete = false;
	}

	$scope.eliminarItemF = function($item) {
		$scope.param = {
			id_producto : $item
		}

		$.ajax({
			data: $scope.param,
			url: '/proyecto/producto/darDeBaja/',
			type: 'post',
			success: function(response) {
				console.log(response);
				$scope.productosMenu();
				$scope.confirmarDelete = false;
				
			}
		})
	}
})