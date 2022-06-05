<?php
namespace Controllers;

use Models\Child;
use Models\Conyu;
use Models\Derechohabiente;

class AdminController{
    public static function delete(){
 
        $derechoHabiente = new Derechohabiente;
        $child = new Child;
        $conyugue = new Conyu;
        $curp = $_POST['curp'];

        //completar el mysql
        $sentenciaDerecho = "curp='" . $curp . "'";
        $sentencia = "curpD='" . $curp . "'";

        //Borrado del hijo y conyugur
        $child->delete($sentencia);
        $conyugue->delete($sentencia);
        //Borrado del padre
        $derechoHabiente->delete($sentenciaDerecho);

        //Borrado de archivos

        //Le mandamos una respuesta el front
        echo json_encode(['respuesra'=> 1]);
    }
}