<?php 



//CLASE MODELO PARA LOS COMENTARIOS

class comentarioModel extends Model {

	public function __construct() {
		parent::__construct();
		
	}

	/*METODOS CRUD PARA LOS COMENTARIOS*/
	public function insertComment($id_producto, $comentario, $usuario) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$sql = "INSERT INTO comentario (id_producto, usuario, descripcion) VALUES ($id_producto, '$usuario', '$comentario')";

		if (mysqli_query($this->conn, $sql)) {
		    echo "OK";	
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}

	}

	public function showComments($id_producto) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$sql = "SELECT * FROM comentario WHERE id_producto = $id_producto";

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

	
}












?>