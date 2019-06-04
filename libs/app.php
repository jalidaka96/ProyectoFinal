<?php 



require_once 'controllers/errores.php';

//ESTA CLASE ES LA QUE SE ENCARGA DE EJECUTAR TODO, ES COMO EL CORAZON DE LA APLICACION WEB
class App {
	/*POR DEFECTO DEPENDE DE LA URL RECIBIMOS DOS PARAMETROS, AQUI LE INDICAMOS QUE DEPENDE DE SI ES EL 
	PRIMER PARAMETRO O EL SEGUNDO QUE EJECUTE PRIMERO EL CONTROLADOR "X" Y EL PARAMETRO DOS QUE EJECUTE
	SU METODO CORRESPONDIENTE*/
	function __construct() {

		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		//var_dump($url);

		//SI EN LA URL NO HAY NINGUN PARAMETRO, SE CARGARA SIEMPRE LA VISTA MAIN
		if (empty($url[0])) {
			
			$archivoController = 'controllers/main.php';
			require_once $archivoController;
			$controller = new Main();
			$controller->loadModel('main');
			$controller->cargarVista();
			exit;
		}


		$archivoController = 'controllers/' . $url[0] . '.php';

		/*SI EXISTE LA VARIABLE CREADA EN LA LINEA ANTERIOR, QUE ME DISPARE AL CONTROLADOR CORRESPONDIENTE, ES DECIR, EL DEL PRIMER PARAMETRO
		EN CASO CONTRARIO QUE ME CARGE LA VISTA DE ERRORES PUESTO QUE EL PARAMETRO ESTA MAL ESCRITO Y ESO SIGNIFICA QUE EL CONTROLADOR NO EXISTE EN EL
		PROYECTO
		AQUI TAMBIEN LE INDICAMOS QUE SI EL SEGUNDO PARAMETRO EXISTE QUE ME EJECUTE UN METODO DE ESE CONTROLADOR*/
		if (file_exists($archivoController)) {
			require_once $archivoController;

			$controller = new $url[0];
			$controller->loadModel($url[0]);


			if (isset($url[1])) {
				$controller->{$url[1]}();
			} else {
				$controller->cargarVista();
			}
		}else {
			
			$controller = new Errores();
			
		}

		

	}
}


?>