<?php
namespace Controllers;
use MVC\Router;
class PaginaInicialController{
    public static function index (Router $router){

        $index = true;
        $router->render('paginas/index', ['index' => $index]);

    }
    public static function buscarPdfRender(Router $router){
  
        $router->render( 'paginas/buscarPdf' ,[]);
    }
    public static function buscarPdf(){
          $pdf = '../generadosPdf/' . $_POST['pdf'];

            //que abra el pdf en modo lectura
           $archivo = readfile($pdf);
           if(!$archivo){
            echo json_encode(['mensaje'=> 'Ficha de inscripción no encontrada', 'tipo'=> 'error']);
           }else{
            echo json_encode(['mensaje'=> 'Ficha de inscripción encontrada', 'tipo'=> 'success']);
           }
        
    }
}