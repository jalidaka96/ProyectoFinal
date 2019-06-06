/*jQuery(function() {
   jQuery( "#formulario_de_prueba" ).validate();
});*/

$(document).ready(function() {
	/*const elem = document.querySelectorAll(".confirmar");

	elem.forEach(elems => {
		elems.addEventListener("keyup", function() {
			if (elems.checkValidity() && $(".confirmar").val().length != 0) {
				elems.style.border = "3px solid green";
			}else if ($(".confirmar").val().length == 0) {
				elems.style.border = "3px solid #ccc";
			} 

		})
	})*/

	function recargar() {
		$("#recargar").html("<img height='50px;' class='col-8 offset-2' src=\"/proyecto/DAL/captcha.php\"  >")
	}

	recargar();

	$("#recargarCaptcha").click(function() {
		recargar();
		$("#captcha").val("");
	})
	$("#registrarBoton").click(function() {
		
		event.preventDefault();
		
		var nombre = $("#nombre").val();
		var apellido = $("#apellido").val();
		var correo = $("#correo").val();
		var telefono = $("#telefono").val();
		var fecha_nac = $("#fecha_nac").val();
		var usuario = $("#usuario").val();
		var password = $("#password").val();
		var repassword = $("#repassword").val();
		var captcha = $("#captcha").val();
		var parametros = {
			nombre : nombre,
			apellido : apellido,
			correo : correo,
			telefono : telefono,
			fecha_nac : fecha_nac,
			usuario : usuario,
			password : password,
			captcha : captcha
		};


		var correoRe = /\w+@\w+\.+[a-z]/;

		

		/*if (nombre === "" || apellido === "" || correo === "" || telefono === "" || fecha_nac === "" || usuario === "" || password === "" || repassword === "" ) {
			$("#vacios").html("Todos los campos son obligatoriosss!")
			$('html,body').animate({
                    scrollTop: $("#vacios").offset().top
                }, 1000, function(){
                    $("#vacios").focus();
            });
		} else if (nombre.length > 30 ) {
			$("#vacios").html("")
			$("#nombreError").html("EL CAMPO DE NOMBRE  NO DEBE TENER MAS DE 30 CARACTERES!")
			$('html,body').animate({
                    scrollTop: $("#nombreError").offset()
                }, 10, function(){
                    $($("#nombre")).focus();
            });
		} else if (apellido.length > 30) {
			$("#vacios").html("")
			$("#apellidoError").html("EL CAMPO DE APELLIDO NO DEBE TENER MAS DE 30 CARACTERES!")
			$('html,body').animate({
                    scrollTop: $("#apellidoError").offset().top
                }, 1000, function(){
                    $("#apellido").focus();
            });
		} else if (!correoRe.test(correo)) {
			$("#vacios").html("")
			$("#emailError").html("EL CORREO DEBE CUMPLIR ESTE FORMATO! 'ejemplo@ejemplo.com'")
			$('html,body').animate({
                    scrollTop: $("#emailError").offset().top
                }, 1000, function(){
                    $("#correo").focus();
            });
		} else if (isNaN(telefono) ) {
			$("#vacios").html("")
			$("#telefonoError").html("EL NUMERO DE TELEFONO DEBE CONTENER SOLO NUMEROS")
			$('html,body').animate({
                    scrollTop: $("#telefonoError").offset().top
                }, 1000, function(){
                    $("#telefono").focus();
            });
		} else if (telefono.length > 20 || telefono.length < 9) {
			$("#vacios").html("")
			$("#telefonoError").html("EL NUMERO DE TELEFONO DEBE TENER ENTRE 9 Y 20 DIGITOS")
			$('html,body').animate({
                    scrollTop: $("#telefonoError").offset().top
                }, 1000, function(){
                    $("#telefono").focus();
            });
		} else if (usuario > 30) {
			$("#vacios").html("")
			$("#usuarioError").html("EL NOMBRE DE USUARIO NO DEBE TENER MAS DE 30 LETRAS")
			$('html,body').animate({
                    scrollTop: $("#usuarioError").offset().top
                }, 1000, function(){
                    $("#usuario").focus();
            });
		}else if (password.length > 15 || password.length < 8) {
			$("#vacios").html("")
			$("#passwordError").html("LA CONTRASEÑA DEBE TENER ENTRE 8 Y 15 CARACTERES")
			$('html,body').animate({
                    scrollTop: $("#passwordError").offset().top
                }, 1000, function(){
                    $("#password").focus();
            });
		} else if (password != repassword) {
			$("#vacios").html("")
			$("#repasswordError").html("Las contraseñas no coinciden!")
			$('html,body').animate({
                    scrollTop: $("#repasswordError").offset().top
                }, 1000, function(){
                    $("#repassword").focus();
            });
		} else {*/
			$("#vacios").html("")
			$("#nombreError").html("")
			$("#apellidoError").html("")
			$("#emailError").html("")
			$("#telefonoError").html("")
			$("#fechaError").html("")
			$("#usuarioError").html("")
			$("#passwordError").html("")
			$("#repasswordError").html("")
			$.ajax({
				data : parametros,
				url: '/proyecto/registro/registrarAlumno/',
				type: 'post',
				success: function(response) {
					if (response == "OK") {
						window.location = '/proyecto/registrado';
					}else if (response == "El captcha introducido no es correcto") {
						$("#errorCaptcha").html("Captcha introducido no es correcto!")
						$("#captcha").val("");
						recargar();
						
					} else {						
						window.location = '/proyecto/errorRegistro'
					}
					
				}
			})
		


		

		

		/*if (nombre == '') {
			$("#nombreError").html("Debe ingresar un nombre!")

		} else if (apellido == '') {
			$("#apellidoError").html("Debe ingresar un apellido");

		} else if (correo == '') {
			$("#emailError").html("Debe ingresar un correo");
			
		} else if (telefono == '') {
			$("#telefonoError").html("Debe ingresar un telefono");
			
		} else if (fecha_nac == '') {
			$("#fechaError").html("Debe ingresar una fecha de nacimiento!");
			
		} else if (usuario == '') {
			$("#usuarioError").html("Debe ingresar un nombre de usuario");
			
		}else if (password == '') {
			$("#passwordError").html("Debe ingresar una contraseña");
			
		} else if (repassword == '') {
			$("#repasswordError").html("Por favor, repite la contraseña!");
			
		}  */





		
		



		
	})
	
})