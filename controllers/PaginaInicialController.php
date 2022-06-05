<?php
namespace Controllers;
use MVC\Router;
class PaginaInicialController{
    public static function index (Router $router){

        $index = true;
        $router->render('index', ['index' => $index]);

    }
}