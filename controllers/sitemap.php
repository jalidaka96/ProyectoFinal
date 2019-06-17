<?php 



class Sitemap extends Controller{
	function __construct() {
		parent::__construct();
		
	}

	function cargarVista() {
		$this->view->cargar('sitemap/index');
	}
}






?>