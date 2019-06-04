<?php 

//CLASE CONTROLADOR QUE POR DEFECTO SU FINALIDAD ES LA DE INDICAR EN TODO MOMENTO QUE SE DEBE DISPARAR A UN CONTROLADOR REFERENCIADO O UN MODELO
class Controller {

	function __construct() {

		$this->view = new View();

	}

	function loadModel($model) {
		$url = 'models/'. $model . 'model.php';

		if (file_exists($url)) {
			require $url;

			$modelName = $model.'Model';
			$this->model = new $modelName();
		}
	}

}







 ?>