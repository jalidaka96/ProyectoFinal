<?php 



class carritoModel extends Model {

	public function __construct() {
		parent::__construct();
		
	}


	public function insertarCarrito($id, $precio) {
		$this->db->connect();
		$this->conn = $this->db->conn();
		$usuario = $_SESSION['usuario'];

		$sql = "INSERT INTO carrito (id_producto, usuario, precio) VALUES ($id,  '$usuario', $precio)";

		if (mysqli_query($this->conn, $sql)) {
		    echo "OK";	
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
	}


	public function mostrarCarrito() {
		$this->db->connect();
		$this->conn = $this->db->conn();
		$usuario = $_SESSION['usuario'];

		$sql = "SELECT * FROM carrito, inventario WHERE usuario = '$usuario' AND carrito.id_producto = inventario.id_producto";

		

		$result = mysqli_query($this->conn, $sql);
		$lista = [];

		if (mysqli_num_rows($result) > 0) {

		    while($row = mysqli_fetch_assoc($result)) {
		        array_push($lista, $row);
		    }
		    echo json_encode($lista);
		} else {
		    echo "0 results";
		}
	}


	public function eliminarCarrito($id_producto, $usuario) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$sql = "DELETE FROM carrito WHERE id_producto = $id_producto AND usuario = '$usuario'";
		
		if (mysqli_query($this->conn, $sql)) {
			echo "OK";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
	}


	public function comprobarCarrito($id_producto) {
		$this->db->connect();
		$this->conn = $this->db->conn();
		$usuario = $_SESSION['usuario'];
		$sql = "SELECT * FROM carrito  WHERE id_producto = $id_producto AND usuario = '$usuario'";
		
		$result = mysqli_query($this->conn, $sql);

			
		
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				return $row['usuario'];


				/*while($row = mysqli_fetch_assoc($result)) {
			        return $row['usuario'];
			    }*/
			} else {
				return "200";
			}
		
	}

	public function eliminarTodo() {
		$this->db->connect();
		$this->conn = $this->db->conn();
		$usuario = $_SESSION['usuario'];

		$sql = "DELETE  FROM carrito WHERE usuario = '$usuario'";
		
		if (mysqli_query($this->conn, $sql)) {
			echo "OK";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
	}


	public function contarCarrito() {
		$this->db->connect();
		$this->conn = $this->db->conn();
		$usuario = $_SESSION['usuario'];
		$query = "SELECT COUNT(*) FROM carrito WHERE usuario = '$usuario'";

		$result = mysqli_query($this->conn, $query);

			
		if ($result) {
			if (mysqli_num_rows($result) > 0) {

				$row = mysqli_fetch_assoc($result);
				
				echo json_encode($row);

				return $row;
			} 
		}
	}

}






?>