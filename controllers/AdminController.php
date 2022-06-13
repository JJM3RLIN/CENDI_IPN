<?php
namespace Controllers;

use Models\Child;
use Models\Conyu;
use Models\Derechohabiente;
use MVC\Router;
class AdminController{

  public static function updateRender(Router $router){
          $router->render('admin/actualizar', []);    
      }

//Traer info de la bd para mostrarla
  public static function traerInfo(){
  
    $derechoHabiente = new Derechohabiente;
    $child = new Child;
    $conyugue = new Conyu;
    $curp = $_POST['curp'];

    //completar el mysql
    $sentenciaDerecho = "curp='" . $curp . "'";
    $sentencia = "curpD='" . $curp . "'";
    $derechoBD = $derechoHabiente->some($sentenciaDerecho)[0];
    $childBD = $child->some($sentencia)[0];

    //Verificamos que exista un conyugue
    if($conyugue->some($sentencia)){
      $conyuBD = $conyugue->some($sentencia)[0];
      echo json_encode(['child'=>$childBD, 'derecho'=>$derechoBD, 'conyu'=> $conyuBD]);
    }else{
      echo json_encode(['child'=>$childBD, 'derecho'=>$derechoBD, 'conyu'=> 0]);
    }


}

    public static function delete(){
 
        $derechoHabiente = new Derechohabiente;
        $child = new Child;
        $conyugue = new Conyu;
        $curp = $_POST['curp'];

        //completar el mysql
        $sentenciaDerecho = "curp='" . $curp . "'";
        $sentencia = "curpD='" . $curp . "'";

        //Obtenemos la boleta para poder borrar el pdf y la foto asociados
       $childBoleta = $child->some($sentencia)[0];
        
        //Borrado del hijo y conyuguE
        $child->delete($sentencia);

        //verificar que tenga conyugue
       $exiteConyu = $conyugue->some($sentencia)[0];

       //Si lo tiene lo borramos
       if($exiteConyu){
        $conyugue->delete($sentencia);

        //Borra imagen del conyugue
        unlink(__DIR__ . '/../fotos/' . $curp . 'Con.jpg');
       }
        //Borrado del padre
        $derechoHabiente->delete($sentenciaDerecho);

        //Borrado de pdf
         unlink(__DIR__ . '/../generadosPdf/' . $childBoleta->boleta . '.pdf');
        //Borrado de fotos
        //child
        unlink(__DIR__ . '/../fotos/' . $childBoleta->boleta . '.jpg');
        //Padre
        unlink(__DIR__ . '/../fotos/' . $curp . '.jpg');
        //Le mandamos una respuesta el front
        echo json_encode(['respuestaB' => 1]);
    }
}
