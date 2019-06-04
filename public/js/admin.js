$(document).ready(function() {
	$("#usuariosMenu").click(function() {
    	$("#usuariosShow").show();
    	$("#productosShow").hide();


    	$.ajax({
			url: '/proyecto/admin/mostrarUsuarios/',
			type: 'post',
			success: function(response) {
				if (response == "OK") {
					window.location = 'registrado';
				} 
				
			}
		})
    });

    $("#productosMenu").click(function() {
    	$("#productosShow").show();
    	$("#usuariosShow").hide();
    })




});