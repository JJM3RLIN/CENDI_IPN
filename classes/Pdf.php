<?php

namespace Classes;
require __DIR__ . '/../fpdf/fpdf.php';
use FPDF;

//se mandara a llamar cuando se le de al boton de generar pdf o registrar
class Pdf 
{
    public $derechoHabiente;
    public $child;
    public $conyugue;

 //Sin no se manda el conyugue su valor por default sera []
public function __construct($dereBD, $childBD, $conyuBD = [])
{
    $this->derechoHabiente = $dereBD[0];
    $this->child = $childBD[0];
    $this->conyugue = $conyuBD[0] ?? [];
}
  public function crearPdf(){

  $meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
   $mes = $meses[date('n')-1];
   $dia = date('d');
   $year = date('Y');
   
    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf->Image('../src/img/titulo.png',0,0,210,40);
    $pdf->Ln(30);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50);
    $pdf->Cell(90,10,'FICHA DE REINSCRIPCION',0,0,'C');
    $pdf->Ln(10);
    $pdf ->SetFont('helvetica','B',10);
    $pdf->Cell(67);
    $pdf->Cell(35,5,'CICLO ESCOLAR:',0,0,'C');
    $pdf ->SetFont('helvetica','BU',10);
    $pdf->Cell(30,5,'2022-2023',0,1);
    $pdf->Ln(3);
    $pdf ->SetFont('helvetica','B',10);
    $pdf->Cell(63);
    $pdf->Cell(30,5,utf8_decode('CENDI: Amelia Sólorzano Cárdenas'),0,0);
    $fotochild = '../fotos/' . $this->child->boleta . '.jpg';
    $pdf->Image($fotochild,170,40,25,30, 'JPG');
    $pdf->Ln(15);
    $pdf ->SetFont('helvetica','B',10);
    $pdf->Cell(142);
    $pdf->Cell(16,5,'FOLIO:',1,0,'C');
    $pdf->SetFillColor(140,201,255);
    $pdf->Cell(30,5,$this->child->boleta,1,1,'C',1); //Folio 
    $pdf->Cell(142);
    $pdf->Cell(16,5,'GRUPO:',1,0,'C');
    $pdf->SetFillColor(140,201,255);
    $pdf->Cell(30,5,$this->child->grupo,1,1,'C',1); //Grupo 
    $pdf->Ln(5);
    $pdf->Cell(23);
    $pdf ->SetFont('helvetica','B',11);
    $pdf->Cell(16,5,utf8_decode('DATOS DEL NIÑO O DE LA NIÑA:'),0,1,'C');
    $pdf->SetFillColor(140,201,255);
    $pdf->Cell(62,5,utf8_decode($this->child->apellidoP),1,0,'C',1);//Primer apellido
    $pdf->Cell(64,5,utf8_decode($this->child->apellidoM),1,0,'C',1);//Segundo apellido
    $pdf->Cell(62,5,utf8_decode($this->child->nombre),1,1,'C',1);//Nombre(s)
    $pdf->Cell(62,5,'Primer apellido',1,0,'C');
    $pdf->Cell(64,5,'Segundo apellido',1,0,'C');
    $pdf->Cell(62,5,'Nombre(s)',1,1,'C');
    $pdf->Cell(45,5,'Fecha de nacimiento:',1,0,'C');
    $pdf->Cell(20,5,$this->child->fechaNacimiento,1,0,'C',1);//Dia
   
    $pdf->Cell(14,5,'Edad:',1,0,'C');
    $pdf->Cell(13,5,utf8_decode('Años:'),1,0,'C');
    $pdf->Cell(16,5,$this->child->edad,1,0,'C',1); //Años
  
    $pdf->Cell(18,5,'CURP:',1,0,'C');
    $pdf->Cell(62,5,$this->child->curp,1,1,'C',1);//CURP

    $pdf->Ln(5);
    $pdf->Cell(23);
    $pdf ->SetFont('helvetica','B',11);
    $pdf->Cell(16,5,utf8_decode('DATOS DEL DERECHOHABIENTE:'),0,1,'C');
    $pdf->SetFillColor(140,201,255);
    $pdf->Cell(62,5,utf8_decode($this->derechoHabiente->apellidoP),1,0,'C',1);//Primer apellido
    $pdf->Cell(64,5,utf8_decode($this->derechoHabiente->apellidoM),1,0,'C',1);//Segundo apellido
    $pdf->Cell(62,5,utf8_decode($this->derechoHabiente->nombre),1,1,'C',1);//Nombres
    $pdf->Cell(62,5,'Primer apellido',1,0,'C');
    $pdf->Cell(64,5,'Segundo apellido',1,0,'C');
    $pdf->Cell(62,5,'Nombre(s)',1,1,'C');
    $pdf->Cell(24,5,'Domicilio ','LR',0,'C');
    $pdf->Cell(164,5,utf8_decode($this->derechoHabiente->domicilio),1,1,'C',1);// Aqui va el domicilio
    $pdf->Cell(24,5,'particular:','LB',0,'C');
    $pdf->Cell(164,5,utf8_decode('Calle, N° Ext. N° Int. Colonia :'),1,1,'C');
    $pdf->Cell(50,5,utf8_decode($this->derechoHabiente->municipio),1,0,'C',1);//Alcaldia o municipio
    $pdf->Cell(56,5,utf8_decode($this->derechoHabiente->entidadFederativa),1,0,'C',1);//Entidad federativa
    $pdf->Cell(14,5,$this->derechoHabiente->cp,1,0,'C',1);//CP
    $pdf->Cell(34,5,$this->derechoHabiente->tel_f,1,0,'C',1);//Telefono fijo
    $pdf->Cell(34,5,$this->derechoHabiente->tel_c,1,1,'C',1);//Telefono celular
    $pdf->Cell(50,5,'Alcaldia o Municipio:',1,0,'C');
    $pdf->Cell(56,5,'Entidad Federativa:',1,0,'C');
    $pdf->Cell(14,5,'C.P.:',1,0,'C');
    $pdf->Cell(34,5,utf8_decode('Teléfono fijo:'),1,0,'C');
    $pdf->Cell(34,5,utf8_decode('Teléfono celular:'),1,1,'C');
    $pdf->Cell(70,5,$this->derechoHabiente->correo,1,0,'C',1);//correo
    $pdf->Cell(63,5,utf8_decode($this->derechoHabiente->ocupacion),1,0,'C',1);//ocupacion
    $pdf->Cell(55,5,$this->derechoHabiente->curp,1,1,'C',1);//curp
    $pdf->Cell(70,5,utf8_decode('Correo electrónico:'),1,0,'C');
    $pdf->Cell(63,5,utf8_decode('Ocupación'),1,0,'C');
    $pdf->Cell(55,5,'CURP:',1,1,'C');
    $pdf->Cell(82,5,utf8_decode($this->derechoHabiente->puesto),1,0,'C',1);//Plaza o puesto
    $pdf->Cell(51,5,$this->derechoHabiente->sueldo,1,0,'C',1);//Sueldo mensual
    $pdf->Cell(55,5,$this->derechoHabiente->nEmpleado,1,1,'C',1);//Numero de empleado
    $pdf->Cell(82,5,utf8_decode('Nombre de plaza o puesto:'),1,0,'C');
    $pdf->Cell(51,5,utf8_decode('Sueldo mensual'),1,0,'C');
    $pdf->Cell(55,5,utf8_decode('Número de empleado'),1,1,'C');
    $pdf->Cell(188,5,utf8_decode($this->derechoHabiente->adscripcion),1,1,'C',1);//Adscripcion
    $pdf->Cell(188,5,utf8_decode('Adscripción '),1,1,'C');
    $pdf->Cell(128,5,$this->derechoHabiente->horarioTrabajo,1,0,'C',1);//Horario de trabajo
    $pdf->Cell(60,5,$this->derechoHabiente->extencion,1,1,'C',1);//Extension
    $pdf->Cell(128,5,utf8_decode('Horario de trabajo'),1,0,'C');
    $pdf->Cell(60,5,utf8_decode('Extensión'),1,1,'C');


    $pdf->Ln(5);

    //Mostrar de manera dinamica la info del conyugue
   
 if(!empty($this->conyugue)){
  $pdf->Cell(30);
  $pdf ->SetFont('helvetica','B',11);
  $pdf->Cell(16,5,utf8_decode('DATOS DEL CÓNYUGE (PADRE, MADRE:'),0,1,'C');
  $pdf->SetFillColor(140,201,255);
  $pdf->Cell(62,5,utf8_decode($this->conyugue->apellidoP),1,0,'C',1); //Primer apellido
  $pdf->Cell(64,5,utf8_decode($this->conyugue->apellidoM),1,0,'C',1);//Segundo apellido
  $pdf->Cell(62,5,utf8_decode($this->conyugue->nombre),1,1,'C',1);//Nombres
  $pdf->Cell(62,5,'Primer apellido',1,0,'C');
  $pdf->Cell(64,5,'Segundo apellido',1,0,'C');
  $pdf->Cell(62,5,'Nombre(s)',1,1,'C');
  $pdf->Cell(24,5,'Domicilio ','LR',0,'C');
  $pdf->Cell(164,5,utf8_decode($this->conyugue->domicilio),1,1,'C',1);//Aqui va el domicilio
  $pdf->Cell(24,5,'particular:','LB',0,'C');
  $pdf->Cell(164,5,utf8_decode('Calle, N° Ext. N° Int. Colonia :'),1,1,'C');
  $pdf->Cell(70,5,utf8_decode($this->conyugue->municipio),1,0,'C',1);//Alcaldia o municipio
  $pdf->Cell(60,5,utf8_decode($this->conyugue->entidadFederativa),1,0,'C',1);//Entidad federativa
  $pdf->Cell(20,5,$this->conyugue->cp,1,0,'C',1);//CP
  $pdf->Cell(38,5,$this->conyugue->telefono,1,1,'C',1);//Telefono fijo
  $pdf->Cell(70,5,'Alcaldia o Municipio:',1,0,'C');
  $pdf->Cell(60,5,'Entidad Federativa:',1,0,'C');
  $pdf->Cell(20,5,'C.P.:',1,0,'C');
  $pdf->Cell(38,5,utf8_decode('Teléfono fijo:'),1,1,'C');
  $pdf->Cell(35,5,'Lugar de trabajo:',1,1,'C');
  $pdf->Cell(73,5,utf8_decode($this->conyugue->lugarTrabajo),1,0,'C',1);//Lugar de trabajo
  $pdf->Cell(28,5,utf8_decode('Ocupación:'),1,0,'C');
  $pdf->Cell(52,5,$this->conyugue->ocupacion,1,1,'C',1);//Ocupacion
  $pdf->Cell(44,5,utf8_decode('Domicilio del trabajo:'),1,0,'C');
  $pdf->Cell(144,5,utf8_decode($this->conyugue->domicilioTrabajo),1,1,'C',1);//Domicilio de trabajo 
  $pdf->Cell(40,5,utf8_decode('Telefóno del trabajo:'),1,0,'C');
  $pdf->Cell(54,5,$this->conyugue->telTrabajo,1,1,'C',1);//Telefono del trabajo 
 }
 $pdf->SetFont('Arial','',8);
    //Cambiar las siguientes dos lineas con la direccion del cendi
    $pdf->Cell(60,5,utf8_decode('Oroya No. 760, Col. Lindavista, Alcaldía Gustavo A. Madero, C.P. 07300. '),0,1);
    $pdf->Image('../src/img/pie.png',0,260,208,30);
    
    $pdf->Ln(20);
    $pdf ->SetFont('helvetica','B',7.7);
    $fotoDerecho = '../fotos/' . $this->derechoHabiente->curp . '.jpg';
    $fotoAutorizado = '../fotos/' . $this->derechoHabiente->curp . 'Au.jpg';
    if(!empty($this->conyugue)){
      $pdf->Cell(60,5,utf8_decode('FOTOGRAFIAS DEL O LA DERECHOHABIENTE, CÓNYUGE (PADRE, MADRE) Y PERSONA AUTORIZADA PARA RECOGER AL NIÑO O A LA NIÑA'),0,1);
      $pdf->Image($fotoDerecho,40,20,25,30, 'JPG');
      $fotoConyugue ='../fotos/' . $this->derechoHabiente->curp . 'Con.jpg';
      $pdf->Image($fotoConyugue,90,20,25,30, 'JPG');
      $pdf->Image($fotoAutorizado,140,20,25,30, 'JPG');
      $pdf->Ln(40);   
      $pdf ->SetFont('helvetica','B',10);
      $pdf->Cell(20);
      $pdf->Cell(45,5,utf8_decode('DERECHOHABIENTE'),0,0,'C');
      $pdf->Cell(5);
      $pdf->Cell(45,5,utf8_decode('CÓNYUGE'),0,0,'C');
      $pdf->Cell(5);
      $pdf->Cell(45,5,utf8_decode('PERSONA'),0,1,'C');
      $pdf->Cell(120);
      $pdf->Cell(45,5,utf8_decode('AUTORIZADA'),0,1,'C');
    }else{
      $pdf->Ln(60);
      $pdf->Cell(60,5,utf8_decode('FOTOGRAFIAS DEL O LA DERECHOHABIENTE Y PERSONA AUTORIZADA PARA RECOGER AL NIÑO O A LA NIÑA'),0,1);
      $pdf->Image($fotoDerecho,40,20,25,30, 'JPG');
      $pdf->Image($fotoAutorizado,90,20,25,30, 'JPG');
      $pdf->Ln(40);   
      $pdf ->SetFont('helvetica','B',10);
      $pdf->Cell(20);
      $pdf->Cell(45,5,utf8_decode('DERECHOHABIENTE'),0,0,'C');
    
      $pdf->Cell(5);
      $pdf->Cell(45,5,utf8_decode('PERSONA AUTORIZADA'),0,1,'C');
      
      
    }
   
   
    $pdf->Ln(5);
    $pdf->Cell(49);
    $pdf ->SetFont('helvetica','',11);
    $pdf->Cell(35,5,utf8_decode('Ciudad de México a'),0,0,'C');
    $pdf ->SetFont('helvetica','B',11);
    $pdf->Cell(8,5,$dia,0,0,'C',1);//Dia
    $pdf ->SetFont('helvetica','',11);
    $pdf->Cell(5,5,utf8_decode('de'),0,0,'C');
    $pdf ->SetFont('helvetica','B',11);
    $pdf->Cell(25,5,$mes,0,0,'C',1);//Mes
    $pdf ->SetFont('helvetica','',11);
    $pdf->Cell(5,5,utf8_decode('de'),0,0,'C');
    $pdf ->SetFont('helvetica','B',11);
    $pdf->Cell(12,5,$year,0,1,'C',1);//Año
    $pdf->Ln(10);
    $pdf->Cell(50);
    $pdf->Cell(90,10,'',0,1,'C',1);
    $pdf->Cell(50);
    $pdf ->SetFont('helvetica','B',11);
    $pdf->Cell(90,5,utf8_decode('Nombre y firma del o la derechohabiente'),'T',1,'C');
    $pdf ->SetFont('helvetica','',6.7);
    $pdf->Cell(130);
    $pdf->Cell(10,5,utf8_decode('Firmar en color azul'),0,1);

    $pdf->Output('F', '../generadosPdf/' . $this->child->boleta . '.pdf', true);
  }
    
}

 