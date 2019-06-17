<?php 




//CLASE MODELO PARA EL PRODUCTO
class productoModel extends Model {

	public function __construct() {
		parent::__construct();
		
	}

	/*TODOS LOS METODOS CRUD QUE SE ENCARGAN DE HACER LAS QUERYS NECESARIAS DESPUES DE RECIBIAR LOS DATOS CORRESPONDIENTES
	DEL CONTROLADOR REFERENCIADO*/
	public function insertarProducto($lista) {
		
		//sleep(1.5);
		$this->db->connect();
		$this->conn = $this->db->conn();

		$nombre = $lista['nombre'];
		$descripcion = $lista['descripcion'];
		$precio = $lista['precio'];
		$imagen = $lista['imagen'];
		$categoria = $lista['categoria'];
		$subcategoria = $lista['subcategoria'];

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('$nombre', '$descripcion', $precio, '$categoria', '$subcategoria', '$imagen')";
		

		if (mysqli_query($this->conn, $sql)) {
		    header("Location: /proyecto/admin");	
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}

		mysqli_close($this->conn);
	}

	//METODO PARA MOSTRAR LOS 4 ULTIMOS PRODUCTOS SUBIDOS A LA BASE DE DATOS
	public function showProductsLast() {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$sql = "SELECT * FROM inventario ORDER BY id_producto DESC limit 3";
		$result = mysqli_query($this->conn, $sql);
		$lista = [];

		if (mysqli_num_rows($result) > 0) {
			    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        array_push($lista, $row);
		    }
		    echo json_encode($lista);
		} else {
		    echo "0 results";
		}

	}

	public function showProductsLastCategoria($puntero) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$sql = "SELECT * FROM inventario WHERE categoria = '$puntero' ORDER BY id_producto DESC limit 4";
		$result = mysqli_query($this->conn, $sql);
		$lista = [];

		if (mysqli_num_rows($result) > 0) {
			    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        array_push($lista, $row);
		    }
		    echo json_encode($lista);
		} else {
		    echo "0 results";
		}

	}

	//METODO PARA MOSTRAR TODOS LOS PRODUCTOS DE LA BASE DE DATOS SEGUN LA CATEGORIA
	public function showProducts($puntero) {
		$this->db->connect();
		$this->conn = $this->db->conn();
		if ($puntero != '') {
			$sql = "SELECT * FROM inventario WHERE categoria = '$puntero'";
			$result = mysqli_query($this->conn, $sql);
			$lista = [];
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        array_push($lista, $row);
			    }
			    echo json_encode($lista);
			} else {
			    echo "0 results";
			}
		} else {
			$sql = "SELECT * FROM inventario  ORDER BY fecha_subida_producto DESC";
			$result = mysqli_query($this->conn, $sql);
			$lista = [];
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        array_push($lista, $row);
			    }
			    echo json_encode($lista);
			} else {
			    echo "0 results";
			}
		}
	}


	public function showProductsCategoria($puntero, $condicion) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$sql = "SELECT * FROM inventario WHERE $condicion = '$puntero'";
			$result = mysqli_query($this->conn, $sql);
			
			return $result;
	}	


	//METODO PARA MOSTRAR LOS DETALLES DE UN PRODUCTO DETERMINADO
	public function showDetail($item) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$query = "SELECT * FROM inventario WHERE id_producto = $item";

		$result = mysqli_query($this->conn, $query);

			
		if ($result) {
			if (mysqli_num_rows($result) > 0) {

				$row = mysqli_fetch_assoc($result);
				
				echo json_encode($row);

				return $row;
			} 
		}
	}


	//METODO PARA CONTRAR LOS PRODUCTOS EXISTENTES EN LA BASE DE DATOS
	public function countItems($item) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$query = "SELECT COUNT(*) FROM comentario WHERE id_producto = $item";

		$result = mysqli_query($this->conn, $query);

			
		if ($result) {
			if (mysqli_num_rows($result) > 0) {

				$row = mysqli_fetch_assoc($result);
				
				echo json_encode($row);

				return $row;
			} 
		}
	}

	//METODO PARA EDITAR UN PRODUCTO
	public function editItem($lista) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$nombre = $lista['nombre'];
		$precio = $lista['precio'];
		$detalle = $lista['detalle'];
		$categoria = $lista['categoria'];
		$subcategoria = $lista['subcategoria'];
		//$imagen = $_POST['imagen'];
		$id_producto = $lista['id_producto'];

		$sql = "UPDATE 		inventario
				SET 		nombre = '$nombre',
							detalle = '$detalle',
							precio = '$precio',
							categoria = '$categoria',
							subcategoria = '$subcategoria' 
				WHERE 		id_producto = $id_producto";

		if (mysqli_query($this->conn, $sql)) {
			echo "OK";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
		mysqli_close($this->conn);
	}


	//METODO PARA ELIMINAR UN PRODUCTO
	public function deleteItem($item) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$sql = "DELETE FROM inventario WHERE id_producto = $item";
		
		if (mysqli_query($this->conn, $sql)) {
			echo "OK";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
		mysqli_close($this->conn);
	}


	public function mostrarPorSubcategoria($item) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$sql = "SELECT * FROM inventario WHERE subcategoria = '$item' ORDER BY fecha_subida_producto DESC LIMIT 4";

		$result = mysqli_query($this->conn, $sql);

			
		$lista = [];

		if (mysqli_num_rows($result) > 0) {
			    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        array_push($lista, $row);
		    }
		    echo json_encode($lista);
		} else {
		    echo "0 results";
		}
	}

	
}












?>