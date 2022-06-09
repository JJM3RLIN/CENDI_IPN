<?php

namespace Controllers;

use Classes\Email;
use Classes\Pdf;
use MVC\Router;
use  Models\ActiveRecord;
use Models\Child;
use Models\Conyu;
use Models\Derechohabiente;

class RegistroController
{

    public static function index(Router $router)
    {
       
        $derechoHabientes = Derechohabiente::all();
        $router->render('admin/index', ['registros' => $derechoHabientes]);
    }
    public static function renderizar(Router $router)
    {
        $router->render('paginas/crear');
    }

    public static  function guardar()
    {
        
       
        $derechoHabiente = [
            'nombre' => $_POST['nombre'], 'apellidoP' => $_POST['apellidoP'], 'apellidoM' => $_POST['apellidoM'],
            'municipio' => $_POST['municipio'], 'entidadFederativa' => $_POST['entidadFederativa'], 'cp' => $_POST['cp'], 'domicilio' => $_POST['domicilio'],
            'tel_f' => $_POST['tel_F'],  'tel_c' => $_POST['tel_C'], 'correo' => $_POST['correo'], 'ocupacion' => $_POST['ocupacion'], 'curp' => $_POST['curp'],
            'puesto' => $_POST['puesto'], 'sueldo' => $_POST['sueldo'], 'nEmpleado' => $_POST['nEmpleado'], 'adscripcion' => $_POST['adscripcion'],
            'horarioTrabajo' => $_POST['horarioTrabajo'], 'extencion' => $_POST['extension']
        ];
      $derechoHabienteBD = new Derechohabiente($derechoHabiente);
      $derechoHabienteBD->add();

       
      $child = [
        'cendi' => $_POST['cendi'], 'nombre' => $_POST['nombreC'], 'apellidoP' => $_POST['apellidoPC'], 'apellidoM' => $_POST['apellidoMC'], 'boleta' => $_POST['boleta'],
        'grupo' => $_POST['grupo'], 'fechaNacimiento' => $_POST['fNacimiento'], 'curp' => $_POST['curpC'], 'curpD' => $_POST['curpD'], 'edad' => $_POST['edad']
    ];

       $childBD = new Child($child);
       $childBD->add(); 
       $conyugue = [
        'nombre' => $_POST['nombreCO'] ?? '', 'apellidoP' => $_POST['apellidoPCO'] ?? '', 'apellidoM' => $_POST['apellidoMCO'] ?? '',
        'municipio' => $_POST['municipio'] ?? '', 'entidadFederativa' => $_POST['entidadFederativa'] ?? '', 'cp' => $_POST['cp'] ?? '', 'domicilio' => $_POST['domicilio'] ?? '',
        'telefono' => $_POST['telefono'] ?? '',  'lugarTrabajo' => $_POST['lugarTrabajo'] ?? '', 'domicilioTrabajo' => $_POST['domicilioTrabajo'] ?? '',
        'telTrabajo' => $_POST['tel_trabajo'] ?? '', 'extencion' => $_POST['extensionCO'] ?? '', 'curpD' => $_POST['curpD'] ?? ''
    ];
    $conyugueBD = new Conyu($conyugue);
        
      if($_POST['tieneCon'] == '1'){

        //Si lo tiene lo añadimos a la bd
           $conyugueBD->add();
       }
            //Imprimimos una respuesta
            echo json_encode(['respuesta' => 1]);
        
    }
    public static function guardarFotos(){
     

        $derechoHabienteBD = new Derechohabiente;
        $childBD = new Child;
        $conyugueBD = new Conyu;

        //Para que la imagen se guarde con el nombre de la boleta y el curp 

        $boleta = $_POST['boleta'];
        $curpD = $_POST['curp'];

        //Obtenemos las imagenes
        $imagenDerecho = $_FILES['fotoDerecho'];
        $imagenChild =$_FILES['fotoChild'];
        $imagenCon =$_FILES['fotoCon'] ?? [];
    

        //Sentencias para la bd
      $sentencia = "curpD='" . $curpD ."'";
      $sentenciaDerecho = "curp='" . $curpD ."'";
      $carpeta = '../fotos/';

      //Renombrar las fotos
      $fotoChild = $boleta . ".jpg";
      $fotoDerecho = $curpD . ".jpg";
      //El archivo que se va a subir y en donde se va a guardar
      move_uploaded_file($imagenDerecho['tmp_name'], $carpeta . $fotoDerecho);
      move_uploaded_file($imagenChild['tmp_name'], $carpeta . $fotoChild);

      //Guardamos las imagenes
       $childBD->addImage($fotoChild, $sentencia);
       $derechoHabienteBD->addImage($fotoDerecho, $sentenciaDerecho);

         //Seleccionamos la info para mostrar en el pdf
        $childRegistro = $childBD->some($sentencia);
        $derechoRegistro = $derechoHabienteBD->some($sentenciaDerecho);

         //En caso de que si exista el conyugue
       if(!empty($imagenCon)){
        $fotoCon = $curpD . "Con.jpg";
        move_uploaded_file($imagenCon['tmp_name'], $carpeta . $fotoCon);
        $conyugueBD->addImage($fotoCon, $sentencia) ;
        $conyugueBD->some($sentencia);

        //Crear pdf con el conyugue
       $pdf = new Pdf($derechoRegistro, $childRegistro,  $conyugueBD);
    }else{

        //Crear pdf sin el conyugue
       $pdf = new Pdf($derechoRegistro, $childRegistro);
    }
    //Guardamos el pdf en el servidor
     $pdf->crearPdf();

        //Envio de correo
         //Enviamos el correo al que se va a enviar y el nombre de la persona
         $mail = new Email($derechoRegistro[0]->correo, $derechoRegistro[0]->nombre, $childRegistro[0]->boleta);

         //Se envia el correo
         $mail->enviarPdf();

        //Redirigimos y mandamos un mensaje de exito
        header('Location: /?tipo=1');
        
      
    }
    
}
