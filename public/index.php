<?php
//Añadimos todas las fucniones, los autoload y la db
require_once '../includes/app.php';


//Registrar rutas

use Controllers\AdminController;
use Controllers\IpnController;
use MVC\Router;
use Controllers\LoginController;
use Controllers\MexicoController;
use Controllers\PaginaInicialController;
use Controllers\RegistroController;

$router = new Router();

//REGISTRO DE RUTAS get es pars que nos renderize cuando se ejecute la ruta y post para el envio de info

//Inicio y cierre de sesión
$router->get("/login", [LoginController::class, 'login']);
$router->post("/login", [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);
$router->get('/', [PaginaInicialController::class, 'index']);
//RUTAS PROTEGIDAS
$router->get('/admin', [RegistroController::class, 'index']);
$router->post('/admin', [RegistroController::class, 'index']);

$router->get('/usuarios/crear', [RegistroController::class, 'renderizar']);
$router->post('/usuarios/ApiCrear', [RegistroController::class, 'guardar']);

//Guardar Fotos
$router->post('/usuarios/fotos', [RegistroController::class, 'guardarFotos']);

$router->get('/admin/actualizar', []);
$router->post('/admin/actualizar', []);

$router->post('/admin/eliminar', [AdminController::class, 'delete']);

//Estados y municipios de México
$router->get('/mexico', [MexicoController::class, 'estadosRepublica']);
$router->get('/mexico/municipios', [MexicoController::class, 'municipios']);
$router->get('/escuelas', [IpnController::class, 'escuelas']);
$router->comprobarRutas();