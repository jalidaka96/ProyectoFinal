<?php 

//CLASE MODELO CUYO CONSTRUCTOR CREA UN OBJETO DE LA CLASE DE LA BASE DE DATOS PARA PODER USAR TODAS SUS FUNCIONES
class Model {

	function __construct() {
		$this->db = new Database();
	}


}







 ?>