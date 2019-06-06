<?php

//AQUI INCLUIMOS TODAS LAS LIBRERIAS NECESARIAS PARA USAR NUESTRO FRAMEWORK PERSONALIZADO 

require_once 'libs/database.php';
require_once 'libs/controller.php';
require_once 'libs/view.php';
require_once 'libs/model.php';
require_once 'libs/app.php';

require_once 'config/config.php';

//INICIAMOS SESSION Y CREAMOS LA CLASE APP PARA PODER EJECUTAR LOS METODOS QUE VAN A HACER FUNCIONAR NUESTROS CONTROLADORES Y MODELOS Y VISTAS
session_start();

$app = new App();











?>