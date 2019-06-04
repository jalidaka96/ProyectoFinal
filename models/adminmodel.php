<?php 

//INCLUIMOS EL FICHERO DE USUARIOMODEL PARA PODER USAR LOS METODOS CRUD 
require_once 'usuariomodel.php';

//CLASE MODELO PARA EL ADMINISTRADOR
class adminModel extends Model {

	public function __construct() {
		parent::__construct();
		
	}

	
	/*LAS SIGUIENTES FUNCIONES SON METODOS DEL MODELO QUE SE ENCARGAN DE REALIZAR EL CRUD PARA LOS USUARIOS*/
	public function show() {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$usuario = new Usuario();
		$usuario->obtener_datos($this->conn);
	}

	public function showDetail($usuarioX) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$usuario = new Usuario();
		$usuario->obtener_datos_por_usuario($usuarioX, $this->conn);
	}

	public function changeUser($lista) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$usuario = new Usuario();
		$usuario->editar($lista, $this->conn);
	}

	public function deleteUser($usuarioX) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$usuario = new Usuario();
		$usuario->eliminar($usuarioX, $this->conn);
	}
}

