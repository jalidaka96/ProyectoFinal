<?php 

//INCLUIR ESTE FICHERO PARA PODER USAR EL CRUD DE USUARIO
require_once 'usuariomodel.php';

//CLASE MODELO PARA PODER REGISTRAR UN USUARIO
class registroModel extends Model {

	public function __construct() {
		parent::__construct();
		
	}

	//SE OBTIENEN LOS DATOS DEL CONTROLADOR Y SE REALIZA EL ALTA DE UN USUARIO, GRACIAS A UN METODO IMPLEMENTADO EN LA CLASE usuariomodel.php
	public function insert($lista) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$usuario = new Usuario();
		$usuario->insertar_datos($lista, $this->conn);
		
	}

	
}










?>