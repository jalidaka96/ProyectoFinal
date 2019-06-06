miApp.controller("logCtrl", function($scope, $http) {
	

	$http.get('/proyecto/log/listaLog/')
	.then(function(resp) {
		console.log(resp.data);
		$scope.log = resp.data;
	})
})