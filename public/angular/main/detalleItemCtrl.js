miApp.controller("detalleItemCtrl", function($scope, $http) {
	

	$scope.mostrarComentar = function() {
		$scope.botones = true;
		$scope.campoComentar = true;
	}

	$scope.cancelar = function() {
		$scope.botones = false;
		$scope.campoComentar = false;
	}


	$scope.comentar = function($id_producto) {
		

		var jsonComentario = {
			id_producto : $id_producto,
			comentario : $scope.comentario
		};
		$http.get('/proyecto/comentario/insertarComentario/',  {
			params: jsonComentario
		})
		.then(function(resp) {
			console.log(resp.data);
			if (resp.data == "OK") {
				$scope.botones = false;
				$scope.campoComentar = false;
				$scope.comentario = "";
				window.location.reload();
			} else {
				$scope.botones = false;
				$scope.campoComentar = false;
				$scope.errorPublicar = true;
			}
		})
	}

	$scope.verComentarios = function($id_producto) {

		var jsonVerComentarios = {
			id_producto : $id_producto,
		};
		$http.get('/proyecto/comentario/mostrarComentarios/',  {
			params: jsonVerComentarios
		})
		.then(function(resp) {
			console.log(resp.data);
			if (resp.data != '0 results') {
				$scope.listadoComentarios = resp.data;
				$scope.vistaComentarios = true;
				$scope.abajo = true;
				$scope.arriba = true;
			} else {
				$scope.vacio = true;
			}
			
		})

	}

	$scope.ocultarComentarios = function() {
		$scope.abajo = false;
		$scope.arriba = false;
		$scope.vistaComentarios = false;
	}

	$scope.positiva = function($id_producto) {

		jsonPositiva = {
			id_producto : $id_producto
		}
		$http.get('/proyecto/puntuacion/positiva/', {
			params: jsonPositiva
		})
		.then(function(resp) {
			console.log(resp.data);
			window.location.reload();
			
		})

	}

	$scope.negativa = function($id_producto) {

		jsonNegativa = {
			id_producto : $id_producto
		}
		$http.get('/proyecto/puntuacion/negativa/', {
			params: jsonNegativa
		})
		.then(function(resp) {
			console.log(resp.data);
			window.location.reload();
			
		})

	}

	$scope.cancelarPositiva = function($id_producto) {

		jsonNegativa = {
			id_producto : $id_producto
		}
		$http.get('/proyecto/puntuacion/cancelarPositiva/', {
			params: jsonNegativa
		})
		.then(function(resp) {
			console.log(resp.data);
			window.location.reload();
			
		})

	}

	$scope.cancelarNegativa = function($id_producto) {

		jsonNegativa = {
			id_producto : $id_producto
		}
		$http.get('/proyecto/puntuacion/cancelarNegativa/', {
			params: jsonNegativa
		})
		.then(function(resp) {
			console.log(resp.data);
			window.location.reload();
			
		})

	}

})