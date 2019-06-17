<?php
require_once '../../config/config.php';

/* NOTA IMPORTANTE */
// Este archivo PHP debe guardarse con encoding UTF8"

/*+++++++++++++++++++++++++++++++++++++++++++++++++/
/*++++++++++++++++++ DB CONNECTION ****************/
/**************************************************/

$servername = constant('HOST');
$username = constant('USER');
$password = constant('PASSWORD');
$db = constant('DB');



// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



/* cambiar el conjunto de caracteres a utf8 */
//$conn->set_charset("utf8");

/*+++++++++++++++++++++++++++++++++++++++++++++++++/
/**************************************************/

// Elimina caracteres extraños que me pueden molestar en las cadenas que meto en los item de los RSS
function sanitize($str) {
	$str=str_replace("&","&amp;",$str);
	$str=str_replace("\"","&quot;",$str);
	$str=str_replace("'","&apos;",$str);
	$str=str_replace(">","&gt;",$str);
	$str=str_replace("<","&lt;",$str);
	$str=str_replace("€","&lt;",$str);
	return $str;
}




$sql = "SELECT * FROM inventario   ORDER BY id_producto DESC LIMIT 10";



$result = mysqli_query($conn, $sql);

/*if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
//comienzo a escribir el código del RSS
$data = '<?xml version="1.0" encoding="UTF-8" ?>';

//Cabeceras del RSS
$data .= '<rss version="2.0">';


//Datos generales del Canal. Edítalos conforme a tus necesidades
$titulo_canal="TIENDA DE INFORMATIC'A";         
$link_canal = "http://teknomel.com";
$descripcion_canal="Todas las ofertas disponibles en la pagina web";
$idioma_canal = "es-es";
$copyright_canal = "&copy; teknomel";


$data .= "<channel>\n";
$data .= "<title>".sanitize($titulo_canal)."</title>";
$data .= "<link>".$link_canal."</link>";
$data .= "<description>".sanitize($descripcion_canal)."</description>";
$data .= "<language>".$idioma_canal."</language>";
$data .= "<copyright>".htmlentities($copyright_canal)."</copyright>\n";

if (mysqli_num_rows($result) > 0) 
{
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
        //elimino caracteres extraños en campos susceptibles de tenerlos
	   

	   $data .= "<item>\n";
	   $data .= "<nombre>" . $row["nombre"] . "</nombre>\n";
	   $data .= "<detalle>" . $row["detalle"] . "</detalle>\n";
	   $data .= "<precion>".$row['precio'] ."</precion>\n";
	   $data .= "<categoria>" . $row["categoria"] . "</categoria>\n";
	   $data .= "<subcategoria>" . $row["subcategoria"] . "</subcategoria>\n";
	   $data .= "</item>\n";
    }
}

//cierro las etiquetas del XML
$data .= "</channel>";
$data .= "</rss>";


//creo cabeceras desde PHP para decir que devuelvo un XML
header("Content-type: text/xml;charset=utf-8");

echo $data;

?>
