miApp.controller("loginCtrl", function($scope) {
	$scope.usuario="";
	$scope.password="";
	$scope.login = function() {
		event.preventDefault();
		if ($scope.usuario == '') {
			$scope.confirmUsuario = "Debes introducir un nombre de usuario!";
			$scope.confirmStyleU = {
				"color" : "red"
			}
		} else if ($scope.password == '') {
			$scope.confirmUsuario = "";
			$scope.confirmPassword = "Debes introducir una contraseña!";
			$scope.confirmStyleP = {
				"color" : "red"
			}
		} else {
			$scope.confirmUsuario="";
			$scope.confirmPassword="";
			$scope.data = {
				usuario : $scope.usuario,
				password : $scope.password
			};

			$.ajax({
				data: $scope.data,
				url: '/proyecto/login/login',
				type: 'post',
				beforeSend: function() {
					$scope.loginError = true;
				},
				success: function(response) {
					if (response == "Iniciado") {
						location.href = '/proyecto/';

						
					}

					/*$scope.enviando = "";
					if (response == "Iniciado") {
						location.href = '/proyecto/';

						
					} else if (response == "Error en la autentificacion") {

						//alert("Nombre de usuario o contraseña incorrectos!")
						$scope.loginError = "Nombre de usuario o contraseña incorrectos!";
					} else {
						console.log(response)
					}*/
				}
			});
		}
	}
})