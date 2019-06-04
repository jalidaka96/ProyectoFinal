<?php 
require_once '../config/config.php';
require_once '../libs/database.php';
require_once '../models/usuariomodel.php';
require_once 'initializer.php';


//CREAR EL OBJETO DE LA BASE DE DATOS
$db = new Database();

//COMPROBAR LA CONEXION A LA BASE DE DATOS
$db->connect();

//CREAR EL OBJETO CONN PARA PODER HACER LAS CONSULTAS
$conn = $db->conn();

//OBTENER EL NOMBRE DE LA BASE DE DATOS
$dbname = constant('DB');


//CREACION E INTEGRACION DE LA BASE DE DATOS DESDE CERO

//CREAR LA BASE DE DATOS Y SELECCIONARLA
$db->createDB($dbname, $conn);
$db->selectDB($dbname, $conn);

//CREAR LA TABLA DE USUARIOS
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
usuario VARCHAR(30) NOT NULL PRIMARY KEY, 
nombre VARCHAR(30) NOT NULL,
apellido VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
telefono INT(20) NOT NULL,
fecha_nac VARCHAR(20) NOT NULL,
password VARCHAR(255) NOT NULL,
rol VARCHAR(30),
fecha_creacion_usuario TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";


if (mysqli_query($conn, $sql)) {
	echo "La tabla de USUARIO se ha creado correctamente. <br>";
} else {
	echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}

//CREAR LA TABLA INVENTARIO
$sql = "CREATE TABLE IF NOT EXISTS inventario (
id_producto INT(30) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
nombre VARCHAR(100) NOT NULL,
detalle VARCHAR(400) NOT NULL,
precio INT(50) NOT NULL,
categoria VARCHAR(20) NOT NULL,
subcategoria VARCHAR(20) NOT NULL,
imagen LONGBLOB NOT NULL,
fecha_subida_producto TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";


if (mysqli_query($conn, $sql)) {
	echo "La tabla de INVENTARIO se ha creado correctamente. <br>";
} else {
	echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}


//CREAR LA TABLA COMENTARIO
$sql = "CREATE TABLE IF NOT EXISTS comentario (
id_comentario INT(30) NOT NULL PRIMARY KEY AUTO_INCREMENT,
id_producto INT(30) NOT NULL, 
usuario VARCHAR(30) NOT NULL,
descripcion VARCHAR(200) NOT NULL,
fecha_publicacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";


if (mysqli_query($conn, $sql)) {
	echo "La tabla de COMENTARIO se ha creado correctamente. <br>";
} else {
	echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}

//AÑADIR CLAVE FORANEA PARA LA TABLA COMENTARIO
$sql = "ALTER TABLE comentario ADD FOREIGN KEY (id_producto) REFERENCES inventario(id_producto) ON DELETE CASCADE;";

mysqli_query($conn, $sql);

$sql = "ALTER TABLE comentario ADD FOREIGN KEY (usuario) REFERENCES usuarios(usuario) ON DELETE CASCADE;";

mysqli_query($conn, $sql);


//id_puntuacion INT(30) NOT NULL PRIMARY KEY AUTO_INCREMENT,

//CREAR LA TABLA PUNTUACION
$sql = "CREATE TABLE IF NOT EXISTS puntuacion (
id_producto INT(30) NOT NULL, 
usuario VARCHAR(30) NOT NULL,
positiva VARCHAR(10) NULL,
negativa VARCHAR(10) NULL,
primary key(id_producto, usuario)
);";


if (mysqli_query($conn, $sql)) {
	echo "La tabla de PUNTUACION se ha creado correctamente. <br>";
} else {
	echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}

//AÑADIR CLAVE FORANEA PARA LA TABLA PUNTUACION
/*$sql = "ALTER TABLE puntuacion ADD FOREIGN KEY (id_producto) REFERENCES inventario(id_producto) ON DELETE CASCADE;";

mysqli_query($conn, $sql);

$sql = "ALTER TABLE puntuacion ADD FOREIGN KEY (usuario) REFERENCES usuarios(usuario) ON DELETE CASCADE;";

mysqli_query($conn, $sql);*/

//CREAR LA TABLA CARRITO
$sql = "CREATE TABLE IF NOT EXISTS carrito (
id_compra INT(30) NOT NULL PRIMARY KEY,
id_producto INT(30) NOT NULL, 
usuario VARCHAR(30) NOT NULL,
cantidad int(50) NULL,
precio VARCHAR(10) NULL
);";


if (mysqli_query($conn, $sql)) {
	echo "La tabla de CARRITO se ha creado correctamente. <br>";
} else {
	echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}

//AÑADIR CLAVE FORANEA PARA LA TABLA CARRITO
$sql = "ALTER TABLE carrito ADD FOREIGN KEY (id_producto) REFERENCES inventario(id_producto) ON DELETE CASCADE;";

mysqli_query($conn, $sql);

$sql = "ALTER TABLE carrito ADD FOREIGN KEY (usuario) REFERENCES usuarios(usuario) ON DELETE CASCADE;";

mysqli_query($conn, $sql);



//EJECUTAR EL INICIALIZADOR
$inicializador = new Inicializador();

$inicializador->ejecutar($conn);

mysqli_close($conn);


?>