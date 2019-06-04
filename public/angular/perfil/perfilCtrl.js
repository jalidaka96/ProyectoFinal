miApp.controller("perfilCtrl", function($scope, $http) {
	$scope.nombreUser="";
	$scope.mostrar = function(x) {
		var jsonUsuario = {
			usuario : x
		};

		
		$http.get('/proyecto/perfil/mostrarDetallesUsuario/', {
			params: jsonUsuario
		})
		.then(function(resp) {
			$scope.detalleUsuario = resp.data;
			$scope.user = resp.data.usuario;
			$scope.detallesShow = true;
			$scope.mostrarButon = true;
			$scope.ocultarButon = true;
		})
	}

	$scope.ocultar = function() {
		$scope.detallesShow = false;
		$scope.mostrarButon = false;
		$scope.ocultarButon = false;
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
				location.href = "login/cerrarSession"
				
			}
		})

	}
	
})