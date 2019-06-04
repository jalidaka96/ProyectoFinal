<?php 


//CONTROLADOR PARA LOS PRODUCTOS
//EN ESTE CONTROLADOR SE VAN A IMPLEMENTAR TODAS LAS FUNCIONES NECESARIAS QUE SE REQUIERA PARA LOS PRODUCTOS
class producto extends Controller{
	function __construct() {
		parent::__construct();
		
	}
	//PARA CARGAR LA VISTA CORRESPONDIENTE
	function cargarVista() {
		$this->view->cargar('productoForm/index');
	}

	function detallesProducto() {
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		
		
		ob_start();
		$row = $this->model->showDetail($url[2]);
		$cantidad = $this->model->countItems($url[2]);
		require 'models/puntuacionmodel.php';
		$puntuacion = new puntuacionModel();
		$obtenerPuntuacionPositiva = $puntuacion->obtenerPuntuacionPositiva();
		$obtenerPuntuacionNegativa = $puntuacion->obtenerPuntuacionNegativa();
		if (isset($_SESSION['usuario'])) {
			
			
			$puntuacionTotal = $puntuacion->puntuacion($row['id_producto']);
		}
		ob_clean();

		
		

		require 'views/productos/detalles.php';
	}


	/*TODOS LOS METODOS QUE SE ENCARGAN DEL CRUD Y QUE ENVIAN LOS DATOS AL MODELO PARA PODER ENCARGARSE DE HACER LAS QUERYS*/

	/*ESTE PRIMER METODO SE TRATA DE INSERTAR UN PRODUCTO A LA BASE DE DATOS Y DEPENDIENDO DE LA CATEGORIA SELECCIONADA, SE
	ENVIARA UNA SUBCATEGORIA U OTRA*/
	function subirProducto() {
		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$imagen = $_FILES['imagen']['name'];
		$ruta = $_FILES['imagen']['tmp_name'];
		$destino = "public/imagenes/" . $imagen;
		copy($ruta, $destino);
		//$imagen = $_POST['imagen'];
		$categoria =$_POST['categoria'];
		$subcategoriaO = $_POST['subcategoriaO'];
		$subcategoriaM = $_POST['subcategoriaM'];
		$subcategoriaP = $_POST['subcategoriaP'];
		if ($categoria == "ordenadores") {
			$lista = ['nombre' => $nombre, 'descripcion' => $descripcion, 'precio' => $precio, 'imagen' => $destino, 'categoria' => $categoria, 'subcategoria' => $subcategoriaO];
			
		} else if ($categoria == "moviles") {
			$lista = ['nombre' => $nombre, 'descripcion' => $descripcion, 'precio' => $precio, 'imagen' => $destino, 'categoria' => $categoria, 'subcategoria' => $subcategoriaM];
			
		} else if ($categoria == "perifericos") {
			$lista = ['nombre' => $nombre, 'descripcion' => $descripcion, 'precio' => $precio, 'imagen' => $destino, 'categoria' => $categoria, 'subcategoria' => $subcategoriaP];
			
		}
		
		$this->model->insertarProducto($lista);
	}

	function mostrarProductos() {
		$puntero = $_GET['categoria'];
		$this->model->showProducts($puntero);
	}

	function mostrarProductoUltimos() {
		$this->model->showProductsLast();
	}

	function mostrarProductoUltimosCategoria() {
		$puntero = $_GET['categoria'];
		$this->model->showProductsLastCategoria($puntero);
	}

	function mostrarDetallesProducto() {
		$item = $_GET['producto'];
		$this->model->showDetail($item);
	}


	function modificarProducto() {
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$detalle = $_POST['detalle'];
		$categoria = $_POST['categoria'];
		$subcategoria = $_POST['subcategoria'];
		//$imagen = $_POST['imagen'];
		$id_producto = $_POST['id_producto'];

		$lista = ['id_producto' => $id_producto, 'nombre' => $nombre, 'detalle' => $detalle, 'precio' => $precio, 'categoria' => $categoria, 'subcategoria' => $subcategoria];


		$this->model->editItem($lista);

	}

	function darDeBaja() {
		$id_producto = $_POST['id_producto'];

		$this->model->deleteItem($id_producto);
	}


	
}






?>