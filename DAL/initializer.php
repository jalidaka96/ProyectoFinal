<?php 


//AQUÍ SE VAN A INICIALIZAR ALGUNOS DATOS EN LA BASE DE DATOS 



class Inicializador {

	/*ESTE METODO SE VA A EJECUTAR EN EL dbcontext.php PARA ASI CREAR AUTOMATICAMENTE LOS USUARIOS Y PRODUCTOS */
	public function ejecutar($conn) {

		/*############# INICIALIZACION PARA USUARIOS#################*/
		$password1 = "admin1";
		$pass_hash1 = password_hash($password1, PASSWORD_DEFAULT);
		$sql = "INSERT INTO usuarios (usuario, nombre, apellido, email, telefono, fecha_nac, password, rol) VALUES ('admin1', 'Khalid', 'Akabbouz', 'jalidaka96@gmail.com', 637228477, '14/04/1996', '$pass_hash1', 'administrador')";


		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el usuario correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$password2 = "admin2";
		$pass_hash2 = password_hash($password2, PASSWORD_DEFAULT);
		$sql = "INSERT INTO usuarios (usuario, nombre, apellido, email, telefono, fecha_nac, password, rol) VALUES ('admin2', 'Mohamed', 'Lamjidi', 'mohamed@gmail.com', 669787452, '14/04/1996', '$pass_hash2', 'administrador')";


		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el usuario correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$password3 = "1234";
		$pass_hash3 = password_hash($password3, PASSWORD_DEFAULT);

		$sql = "INSERT INTO usuarios (usuario, nombre, apellido, email, telefono, fecha_nac, password, rol) VALUES ('jali_br', 'Khalid', 'Aka', 'jali_br@gmail.com', 621478587, '14/04/1996', '$pass_hash3', 'usuario')";


		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el usuario correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$password4 = "1234";
		$pass_hash4 = password_hash($password4, PASSWORD_DEFAULT);

		$sql = "INSERT INTO usuarios (usuario, nombre, apellido, email, telefono, fecha_nac, password, rol) VALUES ('malik97', 'Malik', 'Azzou', 'malik97@gmail.com', 687184798, '14/04/1996', '$pass_hash4', 'usuario')";


		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el usuario correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		/*############# INICIALIZACION PARA PRODUCTOS #################*/


		/*######################### ORDENADORES PORTATILES ##########################*/

		

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('HP Pavilion 15-BC450NS Intel Core i5-', 'Prepárese para crear contenidos, disfrutar de sus archivos multimedia y jugar cuanto quiera, porque este ordenador portátil HP Pavilion ha sido diseñado para responder ante cualquier situación. Gracias a un rendimiento excepcional, puede pasar de unas sesiones de transmisión envolventes a editar vídeo sin retardos, y todo ello desde cualquier lugar.', 599, 'ordenadores', '-Portatiles-', 'public/imagenes/b1.jpg')";
		

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('HP-15', 'Portatil HP Notebook 15-ay113ns, i5-7200U (2.5GHz), 15.6 HD BV LED, 12GB (4GB+8GB), HDD 1TB, DVDRW, WIFI, Bluetooth, Webcam, Std Kbd, AMD R5 M430 Graphics 2GB, Win 10 64, 2 años de garantía (Español) - -Km.0-', 478, 'ordenadores', '-Portatiles-', 'public/imagenes/hp-15.jpg')";
		

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('HP NoteBook 15-DA1009NS Intel Core i5-', 'PEl ordenador portátil HP NoteBook 15-DA1009NS presenta la combinación perfecta de diseño, fiabilidad y fantásticas características. Estilo y productividad, al tiempo que piensas en tu presupuesto, algo que te encantará.', 535, 'ordenadores', '-Portatiles-', 'public/imagenes/1.jpg')";
		

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Asus E402WA', 'Asus E402WA-GA007TS AMD E2-6110/4GB/64GB eMMC/14\"', 249, 'ordenadores', '-Portatiles-', 'public/imagenes/asus.webp')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('HP 15-da0102ns', 'Un portátil con la potencia para navegar, transmitir y hacer mucho más gracias a un procesador Intel y a las opciones de gráficos. Además, las extensas pruebas de calidad garantizan que sigas haciendo, una y otra vez.', 499, 'ordenadores', '-Portatiles-', 'public/imagenes/hp.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		/*######################### ORDENADORES DE MESA ##########################*/

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('PcCom Basic Office Pro Intel Core i5-7400/8GB/240GB SSD', 'Pensado para un uso general en el hogar o en la oficina, el PcCom Office Pro se presenta como un equipo equilibrado en el que su procesador i5-7400, sus 8GB de RAM DDR4 y su rápido disco SSD de 240GB permiten trabajar de forma holgada en muy diferentes tareas, lo que lo hace ideal para entornos domésticos o de oficina.', 401, 'ordenadores', '-De Mesa-', 'public/imagenes/owlotech-evo-usb-3-0-1.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('PcCom Basic Elite Pro Intel Core i7-8700/8GB/1TB+240SSD', 'Pensado para un uso general en el hogar o en la oficina, el PcCom Basic Elite Pro se presenta como un potente equipo en el que su procesador Intel Corei7-8700, sus 8GB de RAM DDR4 2400 y el rápido disco SSD de 240GB SATA3 permiten trabajar de forma holgada en muy diferentes tareas, lo que lo hace ideal para entornos domésticos o de oficina.', 574, 'ordenadores', '-De Mesa-', 'public/imagenes/lite010.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('HP Pavilion 590-A0101NS AMD E2-9000/4GB/1TB', 'Este PC de sobremesa supera las expectativas con una nueva generación de rendimiento, con la libertad de almacenar lo que necesite, junto con un diseño elegante que reduce el tamaño.', 574, 'ordenadores', '-De Mesa-', 'public/imagenes/81qis7k-c-l-sl1500.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('PcCom Bronze Ryzen 3 2200G/8GB/1TB+240SSD', 'Entra en el mundo Gaming del PC con este equipo de relación calidad/precio inigualable. Con este equipo disfrutarás de los juegos Online de más éxito del momento como LOL, Fortnite, Rocket League, CSGO, Overwatch...con un rendimiento excelente gracias a su procesador AMD Ryzen 3 2200G con gráficos Radeon™ Vega 8 Graphics de 8 núcleos, sus 8GB de RAM DDR4 y su rápido SSD de 120GB', 399, 'ordenadores', '-De Mesa-', 'public/imagenes/198659-001.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('PcCom Basic Gamer Intel i5-8400/8GB/1TB+240GB SSD/GTX1050', 'Pensado para un uso general en el hogar o en la oficina, el PcCom Basic Elite Pro se presenta como un potente equipo en el que su procesador Intel Corei7-8700, sus 8GB de RAM DDR4 2400 y el rápido disco SSD de 240GB SATA3 permiten trabajar de forma holgada en muy diferentes tareas, lo que lo hace ideal para entornos domésticos o de oficina.', 578, 'ordenadores', '-De Mesa-', 'public/imagenes/lite010.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('HP OMEN 880-127NS Intel Core i7-8700/16GB/1TB+128GB SSD/GTX 1060', 'Pensado para un uso general en el hogar o en la oficina, el PcCom Basic Elite Pro se presenta como un potente equipo en el que su procesador Intel Corei7-8700, sus 8GB de RAM DDR4 2400 y el rápido disco SSD de 240GB SATA3 permiten trabajar de forma holgada en muy diferentes tareas, lo que lo hace ideal para entornos domésticos o de oficina.', 1199, 'ordenadores', '-De Mesa-', 'public/imagenes/1342800.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}



		/*######################### MOVILES ANDROID ##########################*/


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('S9', 'Apertura doble Capture imágenes asombrosas a plena luz del día y con poca luz. Nuestra lente de apertura dual que define la categoría se adapta como el ojo humano. Es capaz de cambiar automáticamente entre varias condiciones de iluminación con facilidad, haciendo que tus fotos se vean bien ya sea que sea brillante u oscura, de día o de noche.', 589, 'moviles', '-Android-', 'public/imagenes/s9.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Samsung Galaxy M20 4/64GB Charcoal Black Libre', 'Galaxy M20 viene con una impresionante pantalla infinita V de 16 cm (6,3 \"). Su pantalla FHD + de borde a borde casi sin biselado le brinda una experiencia de visualización inmersiva. Obtenga tomas perfectas con poca luz con su cámara de fotos y tomas de gran retrato con función de enfoque en vivo.', 209, 'moviles', '-Android-', 'public/imagenes/sm-m205f-001-front-charcoal-black.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}




		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Samsung Galaxy A40 4/64GB Negro Libre', 'Samsung Galaxy A40 cuenta con una pantalla de 5,9 pulgadas Infinity-U Super AMOLED Full HD+, un procesador de ocho núcleos, doble cámara trasera y una batería de 3100mAh.', 236, 'moviles', '-Android-', 'public/imagenes/a40b-7.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}



		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Samsung Galaxy A20e 3/32GB Negro Libre', 'Cambia a la nuevo generación de Galaxy A, todo lo que amas ahora con más innovación. Una línea completa de modelos especialmente diseñada para ti. La revolucionaria cámara te permitirá capturar el mundo como lo ves. La impresionante pantalla te dará una experiencia increíble. Además, su potente batería será la clave para liberarse de las tomas de corriente y abrirá un mar de posibilidades.', 199, 'moviles', '-Android-', 'public/imagenes/sm-a202f-001-front-black1.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Huawei P20 Lite 64GB Azul Libre', 'El renacimiento de la fotografía ya está aquí!! Imágenes increíbles. Cámara dual de 16 megapíxeles, increíble diseño totalmente de cristal y una nítida pantalla FHD+.Y es que el Huawei P20 Lite parece estar destinado a ser un superventas, con una relación calidad/precio sorprendente.', 175, 'moviles', '-Android-', 'public/imagenes/p20-lite-blue-front.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}



		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Huawei P30 6/128GB Black Libre', 'Replantéate los selfies, la foto completa, la noche, tu estilo... Es el momento. Reescribe las reglas de la fotografía con el nuevo Huawei P30.  ', 749, 'moviles', '-Android-', 'public/imagenes/black-p30-elle-bodegon-frontal.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}
		


		/*######################### MOVILES IPHONE ##########################*/


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Apple iPhone 7 32GB Negro Mate Libre', 'El iPhone 7 NegroMate es el móvil más elegante quepresenta Apple de cara a mantener su gama de smartphone en la cumbre otro añomás. En su presentación, compartida con el iPhone7 Plus, estos móviles libres vuelven a sorprender a propios y extraños conlas ya típicas pero inesperadas e innovadoras ideas de la compañía de lamanzana mordida, sin duda este nuevo dispositivo sigue siendo la vanguardiadel mundo móvil.', 429, 'moviles', '-IOS-', 'public/imagenes/7.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Apple iPhone XR 64Gb Negro Libre', 'Nueva pantalla Liquid Retina con la tecnología LCD más avanzada del sector. Face ID aún más rápido. El chip más inteligente y con mayor potencia en un smart­phone. Y un revolucio­nario sistema de cámara. Da igual por dónde lo mires: el iPhone XR es sencillamente asombroso.', 849, 'moviles', '-IOS-', 'public/imagenes/iphonexr-black-pureangles-us-en-screen1.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Apple iPhone 5S 16GB REWARE Refurbished Gris Espacial Libre', 'Disfruta del iPhone5s en cualquier parte gracias a su gran autonomía y uso eficiente de la batería. Nunca un iPhone había aguantado tanto y es que Apple se toma muy en serio tu satisfacción. Al comprar iPhone 5s estás comprando algo más que un iPhone, compras felicidad.', 129, 'moviles', '-IOS-', 'public/imagenes/3.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Apple iPhone 8 64Gb Dorado Libre', 'Apple iPhone 8 Una mente brillante. Un espectacular diseño integral de vidrio. La cámara más popular del mundo en una versión aún mejor. El chip más inteligente y con mayor potencia que ha tenido un smartphone. Un sistema de carga inalámbrica que es pura comodidad. Y formas nunca vistas de disfrutar de la realidad aumentada. Es el iPhone 8, una nueva generación de iPhone.', 679, 'moviles', '-IOS-', 'public/imagenes/iphone8-gld-pureangles-es-es-screen3.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}



		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Apple iPhone 8 64GB Gris Espacial Libre', 'Apple iPhone 8 Una mente brillante. Un espectacular diseño integral de vidrio. La cámara más popular del mundo en una versión aún mejor. El chip más inteligente y con mayor potencia que ha tenido un smartphone. Un sistema de carga inalámbrica que es pura comodidad. Y formas nunca vistas de disfrutar de la realidad aumentada. Es el iPhone 8, una nueva generación de iPhone.', 679, 'moviles', '-IOS-', 'public/imagenes/iphone8-spgry-pureangles-es-es-screen3.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Apple iPhone 8 64Gb Plata Libre', 'Apple iPhone 8 Una mente brillante. Un espectacular diseño integral de vidrio. La cámara más popular del mundo en una versión aún mejor. El chip más inteligente y con mayor potencia que ha tenido un smartphone. Un sistema de carga inalámbrica que es pura comodidad. Y formas nunca vistas de disfrutar de la realidad aumentada. Es el iPhone 8, una nueva generación de iPhone.', 589, 'moviles', '-IOS-', 'public/imagenes/iphone8-svr-pureangles-es-es-screen3.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}



		/*################################################ PERIFERICOS ###################################################*/


		/*######################### MONITORES ##########################*/

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Newskill Icarus 24\" LED FullHD 144Hz FreeSync', 'La última gran incorporación a la familia Newskill, la nueva gama de monitores gaming Icarus. Enfocado para aquellos jugadores exigentes que piden la perfección al mejor precio. Icarus presenta una resolución Full HD capaz de adaptarse a cualquier reto que le propongas, tanto competitivo como casual.', 199, 'perifericos', '-Monitores-', 'public/imagenes/Newskill.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}
		


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('AOC E2470SWH 24\" LED FullHD', 'Para casa o el trabajo, esta pantalla AOC E2470SWH ofrece un rendimiento excelente con 16,7 millones de colores y un tiempo de respuesta de 1 ms. Las características inteligentes como el modo Eco o e-Saver te ayudan a reducir sin esfuerzo el consumo de energía.', 124, 'perifericos', '-Monitores-', 'public/imagenes/e2470swh-copia.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('BenQ GL2580H 24.5\" LED FHD', 'El monitor sin marco BenQ GL2580H de 24,5 pulgadas combina los biseles superestrechos y la ocultación de cables. La exclusiva tecnología Eye-Care™ de BenQ, con el sistema Low Blue Light de baja luz azul y visualización sin parpadeo ofrece los detalles más delicados en cualquier entorno.', 128, 'perifericos', '-Monitores-', 'public/imagenes/BenQ.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('AOC 22B1H 21.5\" LCD FullHD', 'Te presentamos el monitor LED FullHD de 21.5\" 22B1H de AOC.', 79, 'perifericos', '-Monitores-', 'public/imagenes/AOC.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('BenQ ZOWIE XL2411P 24\" LED 144Hz e-Sports', 'La serie XL de BenQ ZOWIE cuenta con los nuevos monitores de PC para e-sports, afinados para garantizar la experiencia más suave y sensible, y las imágenes más claras: tus armas para la competición.', 199, 'perifericos', '-Monitores-', 'public/imagenes/1502098548.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('MSI Optix MAG271C 27\" LED FullHD 144 Hz FreeSync Curvo', 'Visualice su victoria con el monitor curvo de juegos MSI Optix MAG271C. Equipado con un panel de tiempo de respuesta de 1920x1080, 144hz de refresco y 1 ms, el Optix MAG271C le brindará la ventaja competitiva que necesita para derrotar a sus oponentes. Construido con tecnología FreeSync, el MAG271C puede igualar la frecuencia de actualización de la pantalla con su GPU para una jugabilidad ultrasuave.', 299, 'perifericos', '-Monitores-', 'public/imagenes/msi.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		/*######################### TECLADOS ##########################*/


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Tempest K9 RGB Backlit Teclado Gaming RGB', 'Con un diseño gaming, ligero y súper compacto, el K9 RGB Backlit Gaming Keyboard es un increíble teclado con retroiluminación RGB, conexión USB y 105 teclas con disposición en español. Elige entre sus nueve modos de retroiluminación, diviértete con los siete colores diferentes integrados y ajusta el brillo de las teclas de acuerdo con tus necesidades.', 14, 'perifericos', '-Teclados-', 'public/imagenes/tempest-k9-rgb-backlit-gaming-keyboard-01.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}





		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Owlotech Combo Teclado + Ratón', 'Disfruta de un combo de teclado y ratón de Owlotech con el cque podrás disfrutar de un completo sistema de contrl para tu ordenador. Con un ratón de hasta 2400DPI y un teclado con 105 teclas tendrás en tus manos unos periféricos de alta calidad indispensables para un juego perfecto', 8, 'perifericos', '-Teclados-', 'public/imagenes/owlotech-combo-teclado-raton.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}





		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Logitech Desktop MK120', 'Una combinación resistente, cómoda, elegante y sencilla a la vez. Logitech® Desktop MK120. Una combinación resistente, cómoda, elegante y sencilla a la vez. Con un teclado plano equipado con teclas silenciosas en una distribución estándar, teclas F de tamaño normal y teclado numérico.', 15, 'perifericos', '-Teclados-', 'public/imagenes/5099206020580-2.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}




		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Newskill Hanshi Spectrum Teclado Mecánico RGB Kailh Red', 'Te presentamos en PcComponentes lo último en periféricos Gaming de mano de la marca Newskill. Newskill nace gracias a la pasión por los e-sports, girando en todo momento en torno a la continua evolución y al perfeccionamiento de los usuarios, ya sean profesional o casual gamers. El objetivo de Newskill es proveer a los jugadores de los mejores productos de la escena gaming así como proporcionar el mejor soporte y experiencia de uso a cada uno de ellos. Bienvenidos jugadores!!!!', 64, 'perifericos', '-Teclados-', 'public/imagenes/hanshi-spectrum05.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}





		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Logitech Wireless Combo MK270 Teclado Inalámbrico', 'Tecnología inalámbrica de gran alcance. Conexión rápida y fiable a una distancia de hasta 10 metros sin apenas retrasos ni interferencias gracias a la tecnología inalámbrica avanzada de 2,4 GHz de Logitech.* * El radio de acción inalámbrico depende de las condiciones ambientales y del ordenador.', 25, 'perifericos', '-Teclados-', 'public/imagenes/logitech-wireless-combo-mk270.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}





		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Logitech Wireless Combo MK220 Teclado + Ratón', 'Combinación de teclado y ratón básica con un diseño compacto y tecnología inalámbrica fiable y de largo alcance Logitech® Wireless Combo MK220 es una combinación de teclado y ratón compacta con todas las teclas necesarias, con tecnología inalámbrica fiable y de largo alcance y larga duración de las pilas', 18, 'perifericos', '-Teclados-', 'public/imagenes/logitech-wireless-combo-mk220-teclado-raton.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}





		/*######################### RATONES ##########################*/

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Owlotech X5 Ratón Gaming RGB 4800 DPI', 'El X5 Gaming Mouse de Owlotech es un potente ratón con retroiluminación RGB diseñado para la acción. Compatible con la tecnología Plug & Play, el X5 opera bajo un sensor óptico con 4 niveles de DPI ajustables on-the-fly para que puedas adaptarlo a tus necesidades en cada momento.', 13, 'perifericos', '-Ratones-', 'public/imagenes/fotofront.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}



		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Newskill EOS Ratón Gaming Professional RGB 16000DPI', 'Gaming mouse profesional para todos aquellos buscan llevar la calidad de su equipo un paso más allá. Eos cuenta con todas las prestaciones de un periférico profesional de alta gama: sensor óptico de última generación con hasta 16000 DPI, retroiluminación RGB y software exclusivo para poder configurarlo de la manera que más se adapte a tu modo de juego.', 39, 'perifericos', '-Ratones-', 'public/imagenes/16607111.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}



		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Logitech G203 Prodigy Ratón Gaming 8000DPI', 'Te presentamos el Ratón para Gaming G203 Prodigy de Logitech, un estupendo ratón para jugar de una manera efectiva a todo.', 25, 'perifericos', '-Ratones-', 'public/imagenes/71bmdz6u22l-sl1500.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}



		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Logitech Wireless Mouse M185 Gris', 'Sencillo y fiable ratón inalámbrico de fácil conexión. Conexión inalámbrica fiable. Sin retrasos ni interrupciones. El minúsculo receptor inalámbrico proporciona una conexión de confianza.', 9, 'perifericos', '-Ratones-', 'public/imagenes/logitech-wireless-mouse-m185-gris-2.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}



		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Logitech B100 Ratón Negro', 'Te presentamos el B100 de Logitech, un ratón óptico a un precio asequible.', 4, 'perifericos', '-Ratones-', 'public/imagenes/logitech-b100-raton-negro-1.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}



		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Logitech G502 Hero Ratón Gaming 16000DPI', 'Tu ratón para gaming de alto rendimiento favorito ofrece más funciones y precisión que nunca. Personaliza la iluminación RGB para que coincida con tu estilo y entorno o sincronízala con otros productos Logitech G. El ratón para gaming de alto rendimiento G502 incluye nuestro sensor óptico HERO 16K de próxima generación para máxima precisión y seguimiento superior.', 69, 'perifericos', '-Ratones-', 'public/imagenes/Logitech.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		/*######################### IMPRESORAS ##########################*/
		
		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('HP LaserJet Pro M15w Impresora Láser Monocromo Wifi', 'Obtenga una impresión rápida que se adapta a su espacio y presupuesto. Produzca resultados de calidad profesional, e imprima y escanee desde su móvil. Imprima desde la nube, escanee desde su móvil y solicite tóner con facilidad gracias a la aplicación HP Smart. Imprima fácilmente desde una gran variedad de móviles y tablets. Comparta recursos fácilmente: acceda e imprima con redes inalámbricas. Conecte el móvil directamente a la impresora e imprima fácilmente sin acceder a una red.', 69, 'perifericos', '-Impresoras-', 'public/imagenes/LaserJet.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Brother HL-L2310D Impresora Láser Monocromo', 'Ahorra en cada página impresa con el uso combinado del tóner de larga duración y la impresión automática a doble cara.', 90, 'perifericos', '-Impresoras-', 'public/imagenes/hll2310d-main.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Brother HL-L3230CDW Impresora Láser Color Dúplex Wifi', 'La impresora HL-L3230CDW de Brother continúa brindando la más alta calidad de láser LED a las pequeñas empresas. Esta impresora de color independiente proporciona una calidad de 2400 ppp de forma predeterminada, lo que le permite obtener impresiones profesionales de calidad láser sin inconvenientes de configuración. Proporciona velocidades de impresión de hasta 24 ppm en monocromo y color, brindando una amplia gama de opciones de conectividad que le permiten imprimir de manera rápida y eficiente desde sus dispositivos preferidos.', 210, 'perifericos', '-Impresoras-', 'public/imagenes/d2.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Brother QL-700 Impresora de Etiquetas Profesional', 'Impresora de etiquetas profesional ideal para casa y oficina, con función “Conectar y Etiquetar”. La impresora de etiquetas QL-700 ofrece una forma fácil de imprimir etiquetas profesionales para una amplia gama de utilidades en el trabajo. Con la función “Conectar y Etiquetar” hemos hecho que la impresión de etiquetas sea más fácil que nunca incorporando el software de diseño “P-touch Editor Lite” dentro de la QL-700. Los usuarios de Windows necesitan simplemente conectar el cable USB, ejecutar el software desde el mensaje emergente y después diseñar e imprimir la etiqueta. No es necesario instalar ningún controlador o software.', 70, 'perifericos', '-Impresoras-', 'public/imagenes/brother-ql-700-impresora-de-etiquetas-profesional-1.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('HP Officejet Pro 8210 Color WiFi Dúplex', 'Controle los costes y las prácticas de impresión con un color asequible y una gestión integral de toda la flota. Imprima en color con calidad profesional y obtenga funciones de gestión de impresión perfecta. Aumente la eficiencia con una gran variedad de opciones de impresión móvil.', 84, 'perifericos', '-Impresoras-', 'public/imagenes/hp-officejet-pro-8210-color-wifi-duplex-1.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('HP LaserJet Pro M102a Impresora Láser Monocromo Blanca', 'Te presentamos la impresora laser LaserJet Pro M102a de HP. Simplifíquelo todo con una impresora HP LaserJet Pro asequible con tecnología de cartuchos de tóner JetIntelligence. Genere documentos uniformes y profesionales desde la impresora láser Pro M102a compacta, diseñada para la eficiencia.', 69, 'perifericos', '-Impresoras-', 'public/imagenes/c1.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		/*######################### ALTAVOCES ##########################*/
		
		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Tempest Gaming M8 2.0 Speaker System Altavoces 10W RMS', 'El Gaming M8 2.0 Speaker System de Tempest es un compacto sistema de altavoces USB con control de volumen integrado y una gran potencia de 10W RMS, repartida entre los dos satélites, para que puedas disfrutar al máximo de toda tu música, vídeos y juegos.', 14, 'perifericos', '-Altavoces-', 'public/imagenes/1206-3-2.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Owlotech Black Altavoces 2.1 16W RMS', 'Este sistema de altavoces 2.1 te ofrecen una calidad de sonido increíble a un precio inmejorable. Con sus 16W RMS distribuidos entre el subwoofer y los satélites, podrás disfrutar al máximo de tu música y vídeos favoritos. Para empezar, basta con conectar el cable de 3,5 mm incluido de los altavoces a la toma de entrada de sonido principal de tu ordenador o dispositivo.', 21, 'perifericos', '-Altavoces-', 'public/imagenes/Owlotech.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Ultimate Ears Boom 2 CherryBomb Lite Altavoz Inalámbrico Acuático', 'UE BOOM 2 declara estar loco. Y es culpable. Es el altavoz inalámbrico de 360 grados que proyecta un sonido rematadamente genial, con graves potentes y profundos en todas direcciones, allá donde vayas', 75, 'perifericos', '-Altavoces-', 'public/imagenes/Ultimate.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Woxter Big Bass 95 Altavoces 2.0', 'Con una potencia de sonido de 20 W y una reproducción de graves dinámica, estos altavoces son perfectos para reproducir música, juegos, películas y vídeos online tanto en MAC como en PC. Ofrecen un rendimiento máximo para toda tu música digital. Los Big Bass 95 son compactos y estilizados, con un acabado en negro piano, combinan una avanzada ingeniería con un aspecto impecable para proporcionar un sonido espectacular con tu ordenador de sobremesa, portátil o con su reproductor de MP3 gracias a su entrada auxiliar para dispositivos de audio.', 25, 'perifericos', '-Altavoces-', 'public/imagenes/Woxter.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Woxter Big Bass 260 2.1 150W', 'En la nueva gama de altavoces Big Bass 260 de Woxter no podía faltar este sistema de altavoces 2.1 ideal para utilizarlo con PC multimedia y equipos de sonido estéreo. Los nuevos altavoces Big Bass 260 S, son la solución perfecta para los que desean disponer de toda la magia del sonido multimedia; el subwoofer aporta los matices más graves logrando una novedosa calidad de sonido en su equipo informático.', 51, 'perifericos', '-Altavoces-', 'public/imagenes/260-2.1.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Google Home Mini Altavoz Inteligente y Asistente Gris', 'El asistente virtual de Google ya ha aterrizado en España y aquí te contamos casi todo lo que puedes hacer con él, porque Google Home Mini tiene opciones infinitas y tú las descubrirás cada día.', 59, 'perifericos', '-Altavoces-', 'public/imagenes/google-home-mini-image-5.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}



		/*######################################## ULTIMOS #########################################*/

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Xiaomi Mi Air 13.3\"', 'Este nuevo Mi Laptop Air 13\" utiliza el último procesador Intel Core Kaby Lake i5-8250U. A 3,4 GHz, el procesador de cuatro núcleos tiene un rendimiento de aumento del 40% en comparación con la séptima generación anterior. Además, cuenta con una tarjeta gráfica NVIDIA GeForce MX150 con 2 GB de GDDR5 VRAM.', 799, 'ordenadores', '-Portatiles-', 'public/imagenes/miair01.jpg')";
		

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Huawei P30 6/128GB Black Libre', 'Replantéate los selfies, la foto completa, la noche, tu estilo... Es el momento. Reescribe las reglas de la fotografía con el nuevo Huawei P30.  ', 749, 'moviles', '-Android-', 'public/imagenes/black-p30-elle-bodegon-frontal.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('BenQ GL2580H 24.5\" LED FHD', 'El monitor sin marco BenQ GL2580H de 24,5 pulgadas combina los biseles superestrechos y la ocultación de cables. La exclusiva tecnología Eye-Care™ de BenQ, con el sistema Low Blue Light de baja luz azul y visualización sin parpadeo ofrece los detalles más delicados en cualquier entorno.', 128, 'perifericos', '-Monitores-', 'public/imagenes/BenQ.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}


		$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('Tempest Gaming M8 2.0 Speaker System Altavoces 10W RMS', 'El Gaming M8 2.0 Speaker System de Tempest es un compacto sistema de altavoces USB con control de volumen integrado y una gran potencia de 10W RMS, repartida entre los dos satélites, para que puedas disfrutar al máximo de toda tu música, vídeos y juegos.', 14, 'perifericos', '-Altavoces-', 'public/imagenes/1206-3-2.jpg')";

		if (mysqli_query($conn, $sql)) {
			echo "Se ha insertado el producto correctamente <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

	}


}



//$sql = "INSERT INTO inventario (nombre, detalle, precio, categoria, subcategoria, imagen) VALUES ('', '', , '', '', 'public/imagenes/')";











?>