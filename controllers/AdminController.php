<?php
namespace Controllers;

use Models\Child;
use Models\Conyu;
use Models\Derechohabiente;
use MVC\Router;
class AdminController{

  public static function verDatos(Router $render){

    $curp =$_GET['curp'];
    $sentenciaDerecho = "curp='" . $curp . "'";
    $sentencia = "curpD='" . $curp . "'";

    $derechoHabiente = new Derechohabiente;
    $child = new Child;
    $conyugue = new Conyu;

    $derechoBD = $derechoHabiente->some($sentenciaDerecho)[0];
    $childBD = $child->some($sentencia)[0];
    $conyuBd = $conyugue->some($sentencia)[0] ?? null;
    $render->render('admin/ver', ["derecho"=>$derechoBD, "child"=>$childBD, "conyu"=>$conyuBd]);
  }

  public static function updateRender(Router $router){

    //Actualizacion de imagenes
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $fotoChild = $_FILES['fotoChild'] ?? [];
      $fotoDerecho = $_FILES['fotoDerecho'] ?? [];
      $fotoConyu = $_FILES['fotoCon'] ?? [];

      $curp = $_POST['curp'];
      $boleta = $_POST['boleta'];
      $carpeta = '../fotos/';
      if(!empty($fotoChild)){
        //Eliminar foto anterior
        unlink(__DIR__ . '/../fotos/' . $boleta . '.jpg');

        //Crear Nueva foto
        move_uploaded_file($fotoChild['tmp_name'], $carpeta . $boleta . '.jpg');
       
      }
      if(!empty($fotoDerecho)){
         unlink(__DIR__ . '/../fotos/' . $curp . '.jpg');
         move_uploaded_file($fotoChild['tmp_name'], $carpeta . $curp . '.jpg');
      }
      if(!empty($fotoConyu)){
        unlink(__DIR__ . '/../fotos/' . $curp . 'Con.jpg');
        move_uploaded_file($fotoConyu['tmp_name'], $carpeta . $curp . 'Con.jpg');
      }
      header('Location: /admin?tipo=2');
    }
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

        //Persona autorizada
        unlink(__DIR__ . '/../fotos/' . $curp . 'Au.jpg');
        //Le mandamos una respuesta el front
        echo json_encode(['respuestaB' => 1]);
    }

    public static function update(){
      $sentenciaDerecho = "curp='" . $_POST['curp'] . "'";
      $sentencia = "curpD='" . $_POST['curp'] . "'";

      $derechoHabiente = [
        'nombre' => $_POST['nombre'], 'apellidoP' => $_POST['apellidoP'], 'apellidoM' => $_POST['apellidoM'],
        'municipio' => $_POST['municipio'], 'entidadFederativa' => $_POST['entidadFederativa'], 'cp' => $_POST['cp'], 'domicilio' => $_POST['domicilio'],
        'tel_f' => $_POST['tel_F'],  'tel_c' => $_POST['tel_C'], 'correo' => $_POST['correo'], 'ocupacion' => $_POST['ocupacion'], 'curp' => $_POST['curp'],
        'puesto' => $_POST['puesto'], 'sueldo' => $_POST['sueldo'], 'nEmpleado' => $_POST['nEmpleado'], 'adscripcion' => $_POST['adscripcion'],
        'horarioTrabajo' => $_POST['horarioTrabajo'], 'extencion' => $_POST['extension']
    ];
  $derechoHabienteBD = new Derechohabiente($derechoHabiente);
 $derechoHabienteBD->update($sentenciaDerecho);

   
   $child = [
    'cendi' => $_POST['cendi'], 'nombre' => $_POST['nombreC'], 'apellidoP' => $_POST['apellidoPC'], 'apellidoM' => $_POST['apellidoMC'], 'boleta' => $_POST['boleta'],
    'grupo' => $_POST['grupo'], 'fechaNacimiento' => $_POST['fNacimiento'], 'curp' => $_POST['curpC'], 'curpD' => $_POST['curpD'], 'edad' => $_POST['edad']
];

   $childBD = new Child($child);
   $childBD->update( $sentencia); 
   $conyugue = [
    'nombre' => $_POST['nombreCO'] ?? '', 'apellidoP' => $_POST['apellidoPCO'] ?? '', 'apellidoM' => $_POST['apellidoMCO'] ?? '',
    'municipio' => $_POST['municipio'] ?? '', 'entidadFederativa' => $_POST['entidadFederativa'] ?? '', 'cp' => $_POST['cp'] ?? '', 'domicilio' => $_POST['domicilio'] ?? '',
    'telefono' => $_POST['telefono'] ?? '',  'lugarTrabajo' => $_POST['lugarTrabajo'] ?? '', 'domicilioTrabajo' => $_POST['domicilioTrabajo'] ?? '',
    'telTrabajo' => $_POST['tel_trabajo'] ?? '', 'extencion' => $_POST['extensionCO'] ?? '', 'curpD' => $_POST['curpD'] ?? ''
];
$conyugueBD = new Conyu($conyugue);
if($_POST['tieneCon'] == '1'){

  //Si lo tiene lo añadimos a la bd
     $conyugueBD->update( $sentencia);
 }

 echo json_encode(["respuesta" => 1]);
  
    }
    
}

