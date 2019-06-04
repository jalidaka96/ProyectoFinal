<?php 


//CLASE VISTA PARA PODER CARGAR DEPENDIENDO DEL PARAMETRO UNA VISTA U OTRA
class View {

	function __construct() {
	}

	function cargar($nombre) {
		require 'views/' . $nombre . '.php';
	}


}







 ?>