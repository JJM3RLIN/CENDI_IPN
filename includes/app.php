<?php

use Models\ActiveRecord;

require 'config/database.php';
require 'funciones.php';

require __DIR__ . '/../vendor/autoload.php';

//Inicio la conexión a mi db
$db = conectarDb();
ActiveRecord::setDb($db);