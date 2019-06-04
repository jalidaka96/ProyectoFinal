miApp.controller("productoCtrl", function($scope) {
	$scope.eleccion = function() {

		switch ($scope.seleccionado) {
			case 'ordenadores':
				$scope.subcategoriaOrdenadores = true;
				$scope.subcategoriaMoviles = false;
				$scope.subcategoriaPerifericos = false;
				break;
			case 'moviles':
				$scope.subcategoriaMoviles = true;
				$scope.subcategoriaOrdenadores = false;
				$scope.subcategoriaPerifericos = false;
				break;
			case 'perifericos':
				$scope.subcategoriaPerifericos = true;
				$scope.subcategoriaMoviles = false;
				$scope.subcategoriaOrdenadores = false;
				break;
		}
	}
})