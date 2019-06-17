miApp.controller("carritoCtrl", function($scope, $http) {
	$http.get('/proyecto/carrito/contarCarrito/')
	.then(function(resp) {
		console.log(resp.data)
		$scope.cantidad = resp.data['COUNT(*)'];
		console.log($scope.cantidad)
		//alert($scope.cantidad)
		var storage = localStorage;
		storage.setItem("cantidad", $scope.cantidad);
	})

	
	

	/*if (storage.getItem("cantidad")) {
		var cantidad = storage.getItem("cantidad");
		//console.log(item)

		

		$http.get('/proyecto/producto/mostrarPorSubcategoria/',  {
				params: jsonSubcategoria
			})
		.then(function(resp) {
			console.log(resp.data);
			$scope.relacion = resp.data;
			$scope.interes = true;
		})

	}*/


	$http.get('/proyecto/carrito/mostrarCarrito/')
	.then(function(resp) {
		$scope.total = 0;
		console.log(resp.data);
		if (resp.data == "0 results") {
			$scope.deleteAll = false;
			$scope.formaDePago = false;
			$scope.tablaCarrito = false;
			$scope.vacio = false;
			
		} else {
			$scope.deleteAll = true;
			$scope.tablaCarrito = true;
			$scope.vacio = true;
			$scope.carrito = resp.data;
			console.log($scope.carrito.length)
			
			
			for (var i = $scope.carrito.length - 1; i >= 0; i--) {
				console.log($scope.carrito[i].precio)
				$scope.total += parseInt($scope.carrito[i].precio)
			}

			console.log($scope.total)
		}
		
	})



	$scope.eliminarCesta = function($id_producto) {
		var jsonEliminar = {
			id_producto : $id_producto
		};

		$http.get('/proyecto/carrito/eliminarCarrito/',  {
			params: jsonEliminar
		})
		.then(function(resp) {
			console.log(resp.data);
			window.location.reload();
		})
	}

	$scope.eliminarTodo = function($id_producto) {
		

		$http.get('/proyecto/carrito/eliminarTodo/')
		.then(function(resp) {
			console.log(resp.data);
			window.location.reload();
		})
	}


	$scope.realizarPedido = function() {
		$scope.formaDePago = true;
		$scope.carritoTodo = true;
	}

	$scope.cancelarPago = function() {
		$scope.formaDePago = false;
		$scope.carritoTodo = false;
	}



	paypal.Buttons({
	    createOrder: function(data, actions) {
	      return actions.order.create({
	        purchase_units: [{
	          amount: {
	            value: $scope.total
	          }
	        }]
	      });
	    },
	    onApprove: function(data, actions) {
	      return actions.order.capture().then(function(details) {
	        alert('Transaction completed by ' + details.payer.name.given_name);
	        var storage = localStorage;
			storage.setItem("cantidad", 0);
	        $scope.eliminarTodo();	
	        // Call your server to save the transaction
	        return fetch('/paypal-transaction-complete', {
	          method: 'post',
	          headers: {
	            'content-type': 'application/json'
	          },
	          body: JSON.stringify({
	            orderID: data.orderID
	          })
	        });
	      });
	    }
	  }).render('#paypal-button-container');

})