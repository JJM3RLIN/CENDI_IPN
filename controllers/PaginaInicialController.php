<?php
namespace Controllers;

use Classes\Email;
use Models\Derechohabiente;
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
     $pdf =  $_POST['pdf'];
     $curp = $_POST['curp'];
     $sentencia = "curp='" . $curp . "'";
      $derecho = new Derechohabiente(); 
      $derechoBD =  $derecho->some($sentencia);
        if(file_exists('../generadosPdf/' . $pdf . ".pdf")){
            $mail = new Email($derechoBD[0]->correo, $derechoBD[0]->nombre,$pdf);
            //Se envia el correo otra vez
            $mail->enviarPdf();
            echo json_encode(['mensaje'=>'Se ha enviado a tu correo la ficha de inscripción', "tipo"=>"success"]);
        }else{
            echo json_encode(['mensaje'=>'No se ecnontro la ficha de inscripción', "tipo"=>"error"]);
        }
        
    }
}