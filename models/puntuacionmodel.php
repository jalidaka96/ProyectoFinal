<?php 




//CLASE MODELO PARA PUNTUACION
//AQUI SE VAN A IMPLEMENTAR LAS  FUNCIONES NECESARIAS PARA QUE EL SISTEMA DE VOTOS FUNCIONE CORRECTAMENTE
class puntuacionModel extends Model {

	public function __construct() {
		parent::__construct();
		
	}


	/*ESTOS DOS METODOS HACEN UNA QUERY PARA INDICAR QUE UN USUARIO HA REALIZADO UNA VALORACION POSITIVA O NEGATIVA*/
	public function positiva($id_producto, $usuario) {
		$this->db->connect();
		$this->conn = $this->db->conn();
		$sql = "INSERT INTO puntuacion (id_producto, usuario, positiva) VALUES ($id_producto, '$usuario', 'OK')";

		if (mysqli_query($this->conn, $sql)) {
		    echo "OK";	
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}

	}

	public function negativa($id_producto, $usuario) {
		$this->db->connect();
		$this->conn = $this->db->conn();
		$sql = "INSERT INTO puntuacion (id_producto, usuario, negativa) VALUES ($id_producto, '$usuario', 'OK')";

		if (mysqli_query($this->conn, $sql)) {
		    echo "OK";	
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}

	}


	/*ESTE METODO EN CONCRETO LO QUE HACE ES OBTENER LOS LIKES DE UN DETERMINADO PRODUCTO, SU FINALIDAD ES TAMBIEN SABER SI UN USUARIO 
	EN CONCRETO HA DADO UNA VALORACION EN EL PASADO SOBRE ESE PRODUCTO E INDICARSELO*/
	public function puntuacion($id_producto) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$usuario = $_SESSION['usuario'];
		
		$sql = "SELECT * FROM puntuacion WHERE id_producto = $id_producto AND usuario = '$usuario'";
		
		$result = mysqli_query($this->conn, $sql);
		$lista = [];
		if (mysqli_num_rows($result) > 0) {

			$row = mysqli_fetch_assoc($result);
			return $row;
		    // output data of each row
		    /*while($row = mysqli_fetch_assoc($result)) {
		        array_push($lista, $row);
		    }
		    echo json_encode($lista);*/
		} else {
		    echo "0 results";
		}
	}

	/*ESTOS DOS METODOS SIRVEN PARA ANULAR UNA VOTACION TANTO POSITIVA COMO NEGAIVA REALIZADA POR EL USUARIO*/
	public function cancelarPositiva($id_producto) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$usuario = $_SESSION['usuario'];


		$sql = "DELETE FROM puntuacion WHERE id_producto = $id_producto AND usuario = '$usuario'  AND positiva = 'OK'";
		
		if (mysqli_query($this->conn, $sql)) {
			echo "OK";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
		mysqli_close($this->conn);

	}

	public function cancelarNegativa($id_producto) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$usuario = $_SESSION['usuario'];

		$sql = "DELETE FROM puntuacion WHERE id_producto = $id_producto AND usuario = '$usuario' AND negativa = 'OK'";
		
		if (mysqli_query($this->conn, $sql)) {
			echo "OK";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
		mysqli_close($this->conn);

	}

	//ESTAS DOS FUNCIONES SON PARA CONTAR LA CANTIDAD DE VOTOS POSITIVOS Y NEGATIVOS TIENE UN DETERMINADO PRODUCTO
	public function obtenerPuntuacionPositiva() {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$query = "SELECT COUNT(*) FROM puntuacion  WHERE positiva = 'OK'";

		$result = mysqli_query($this->conn, $query);

		if ($result) {
			$row = mysqli_fetch_assoc($result);
			return $row;
		}
	}

	public function obtenerPuntuacionNegativa() {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$query = "SELECT COUNT(*) FROM puntuacion  WHERE negativa = 'OK'";

		$result = mysqli_query($this->conn, $query);

		if ($result) {
			$row = mysqli_fetch_assoc($result);
			return $row;
		}
	}

	

	
}


?>