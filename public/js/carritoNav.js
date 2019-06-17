

$(document).ready(function() {
	var storage = localStorage;

	if (storage.getItem("cantidad")) {
		var cantidad = storage.getItem("cantidad");
		//alert(cantidad)
		//console.log(item)
		//var elem = document.getElementById('cantidadNav');
		//alert(elem)
		//cantidad.innerHTML = "kajsdks"

		

		

	}
	var elem = $("#cantidadNav").html(cantidad);

	$("#cerrarSession").click(function() {
		var storage = localStorage;
		storage.setItem("cantidad", 0);
	})
})