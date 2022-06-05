<?php

namespace Classes;
require __DIR__ . '/../fpdf/fpdf.php';
use FPDF;

//se mandara a llamar cuando se le de al boton de generar pdf o registrar
class Pdf 
{
    public $dato1;
    public $dato2;
    public $dato3;

 //Al crear el objeto  añadiremos la info que ira en el pdf
public function __construct($dato, $dato2)
{
    $this->dato1 = $dato;
    $this->dato2 = $dato2;
}
  public function crearPdf(){
    
    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf->Image('../src/img/titulo.png',0,0,210,30);
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
    $pdf->Cell(30,5,'CENDI:',0,0);
    $pdf->Image('../src/img/foto1.png',170,40,25,30);
    $pdf->Ln(15);
    $pdf ->SetFont('helvetica','B',10);
    $pdf->Cell(142);
    $pdf->Cell(16,5,'FOLIO:',1,0,'C');
    $pdf->SetFillColor(140,201,255);
    $pdf->Cell(30,5,'',1,1,'C',1);
    $pdf->Cell(142);
    $pdf->Cell(16,5,'GRUPO:',1,0,'C');
    $pdf->SetFillColor(140,201,255);
    $pdf->Cell(30,5,'',1,1,'C',1);
    $pdf->Ln(5);
    $pdf->Cell(23);
    $pdf ->SetFont('helvetica','B',11);
    $pdf->Cell(16,5,utf8_decode('DATOS DEL NIÑO O DE LA NIÑA:'),0,1,'C');
    $pdf->SetFillColor(140,201,255);
    $pdf->Cell(62,5,'',1,0,'C',1);
    $pdf->Cell(64,5,'',1,0,'C',1);
    $pdf->Cell(62,5,'',1,1,'C',1);
    $pdf->Cell(62,5,'Primer apellido',1,0,'C');
    $pdf->Cell(64,5,'Segundo apellido',1,0,'C');
    $pdf->Cell(62,5,'Nombre(s)',1,1,'C');
    $pdf->Cell(44,5,'Fecha de nacimiento:',1,0,'C');
    $pdf->Cell(9,5,utf8_decode('Día:'),1,0,'C');
    $pdf->Cell(9,5,'',1,0,'C',1);
    $pdf->Cell(12,5,'Mes:',1,0,'C');
    $pdf->Cell(22,5,'',1,0,'C',1);
    $pdf->Cell(10,5,utf8_decode('Año:'),1,0,'C');
    $pdf->Cell(12,5,'',1,0,'C',1);
    $pdf->Cell(14,5,'Edad:',1,0,'C');
    $pdf->Cell(13,5,utf8_decode('Años:'),1,0,'C');
    $pdf->Cell(16,5,'',1,0,'C',1);
    $pdf->Cell(12,5,'Mes:',1,0,'C');
    $pdf->Cell(15,5,'',1,1,'C',1);
    $pdf->Cell(18,5,'CURP:',1,0,'C');
    $pdf->Cell(64,5,'',1,1,'C',1);

    $pdf->Ln(5);
    $pdf->Cell(23);
    $pdf ->SetFont('helvetica','B',11);
    $pdf->Cell(16,5,utf8_decode('DATOS DEL DERECHOHABIENTE:'),0,1,'C');
    $pdf->SetFillColor(140,201,255);
    $pdf->Cell(62,5,'',1,0,'C',1);
    $pdf->Cell(64,5,'',1,0,'C',1);
    $pdf->Cell(62,5,'',1,1,'C',1);
    $pdf->Cell(62,5,'Primer apellido',1,0,'C');
    $pdf->Cell(64,5,'Segundo apellido',1,0,'C');
    $pdf->Cell(62,5,'Nombre(s)',1,1,'C');
    $pdf->Cell(24,5,'Domicilio ','LR',0,'C');
    $pdf->Cell(60,5,'',1,0,'C',1);
    $pdf->Cell(23,5,'',1,0,'C',1);
    $pdf->Cell(23,5,'',1,0,'C',1);
    $pdf->Cell(58,5,'',1,1,'C',1);
    $pdf->Cell(24,5,'particular:','LB',0,'C');
    $pdf->Cell(60,5,'Calle:',1,0,'C');
    $pdf->Cell(23,5,utf8_decode('N° Ext.:'),1,0,'C');
    $pdf->Cell(23,5,utf8_decode('N° Int.:'),1,0,'C');
    $pdf->Cell(58,5,'Colonia:',1,1,'C');
    $pdf->Cell(50,5,'',1,0,'C',1);
    $pdf->Cell(56,5,'',1,0,'C',1);
    $pdf->Cell(14,5,'',1,0,'C',1);
    $pdf->Cell(34,5,'',1,0,'C',1);
    $pdf->Cell(34,5,'',1,1,'C',1);
    $pdf->Cell(50,5,'Alcaldia o Municipio:',1,0,'C');
    $pdf->Cell(56,5,'Entidad Federativa:',1,0,'C');
    $pdf->Cell(14,5,'C.P.:',1,0,'C');
    $pdf->Cell(34,5,utf8_decode('Teléfono fijo:'),1,0,'C');
    $pdf->Cell(34,5,utf8_decode('Teléfono celular:'),1,1,'C');
    $pdf->Cell(70,5,'',1,0,'C',1);
    $pdf->Cell(63,5,'',1,0,'C',1);
    $pdf->Cell(55,5,'GOHO020105HMCNRMA3',1,1,'C',1);
    $pdf->Cell(70,5,utf8_decode('Correo electrónico:'),1,0,'C');
    $pdf->Cell(63,5,utf8_decode('Ocupación'),1,0,'C');
    $pdf->Cell(55,5,'CURP:',1,1,'C');
    $pdf->Cell(82,5,'',1,0,'C',1);
    $pdf->Cell(51,5,'',1,0,'C',1);
    $pdf->Cell(55,5,'',1,1,'C',1);
    $pdf->Cell(82,5,utf8_decode('Nombre de plaza o puesto:'),1,0,'C');
    $pdf->Cell(51,5,utf8_decode('Sueldo mensual'),1,0,'C');
    $pdf->Cell(55,5,utf8_decode('Número de empleado'),1,1,'C');
    $pdf->Cell(188,5,'',1,1,'C',1);
    $pdf->Cell(188,5,utf8_decode('Adscripción '),1,1,'C');
    $pdf->Cell(188,5,'',1,1,'C',1);
    $pdf->Cell(188,5,utf8_decode('Nombre y cargo de su jefe o jefa inmediato'),1,1,'C');
    $pdf->Cell(128,5,'',1,0,'C',1);
    $pdf->Cell(60,5,'',1,1,'C',1);
    $pdf->Cell(128,5,utf8_decode('Horario de trabajo'),1,0,'C');
    $pdf->Cell(60,5,utf8_decode('Extensión'),1,1,'C');


    $pdf->Ln(5);
    $pdf->Cell(30);
    $pdf ->SetFont('helvetica','B',11);
    $pdf->Cell(16,5,utf8_decode('DATOS DEL CÓNYUGE (PADRE, MADRE:'),0,1,'C');
    $pdf->SetFillColor(140,201,255);
    $pdf->Cell(62,5,'',1,0,'C',1);
    $pdf->Cell(64,5,'',1,0,'C',1);
    $pdf->Cell(62,5,'',1,1,'C',1);
    $pdf->Cell(62,5,'Primer apellido',1,0,'C');
    $pdf->Cell(64,5,'Segundo apellido',1,0,'C');
    $pdf->Cell(62,5,'Nombre(s)',1,1,'C');
    $pdf->Cell(24,5,'Domicilio ','LR',0,'C');
    $pdf->Cell(60,5,'',1,0,'C',1);
    $pdf->Cell(23,5,'',1,0,'C',1);
    $pdf->Cell(23,5,'',1,0,'C',1);
    $pdf->Cell(58,5,'',1,1,'C',1);
    $pdf->Cell(24,5,'particular:','LB',0,'C');
    $pdf->Cell(60,5,'Calle:',1,0,'C');
    $pdf->Cell(23,5,utf8_decode('N° Ext.:'),1,0,'C');
    $pdf->Cell(23,5,utf8_decode('N° Int.:'),1,0,'C');
    $pdf->Cell(58,5,'Colonia:',1,1,'C');
    $pdf->Cell(50,5,'',1,0,'C',1);
    $pdf->Cell(56,5,'',1,0,'C',1);
    $pdf->Cell(14,5,'',1,0,'C',1);
    $pdf->Cell(34,5,'5537361914',1,0,'C',1);
    $pdf->Cell(34,5,'5537361914',1,1,'C',1);
    $pdf->Cell(50,5,'Alcaldia o Municipio:',1,0,'C');
    $pdf->Cell(56,5,'Entidad Federativa:',1,0,'C');
    $pdf->Cell(14,5,'C.P.:',1,0,'C');
    $pdf->Cell(34,5,utf8_decode('Teléfono fijo:'),1,0,'C');
    $pdf->Cell(34,5,utf8_decode('Teléfono celular:'),1,1,'C');
    $pdf->Cell(40,5,'Lugar de trabajo:',1,0,'C');
    $pdf->Cell(60,5,'',1,0,'C',1);
    $pdf->Cell(34,5,utf8_decode('Ocupación:'),1,0,'C');
    $pdf->Cell(54,5,'',1,1,'C',1);
    $pdf->Cell(44,5,utf8_decode('Domicilio del trabajo:'),1,0,'C');
    $pdf->Cell(144,5,'',1,1,'C',1);
    $pdf->Cell(40,5,utf8_decode('Telefóno del trabajo:'),1,0,'C');
    $pdf->Cell(54,5,'',1,0,'C',1);
    $pdf->Cell(40,5,utf8_decode('Telefono del celular:'),1,0,'C');
    $pdf->Cell(54,5,'',1,1,'C',1);
    $pdf->Cell(60,5,utf8_decode('Religión de la familia:'),1,0,'C');
    $pdf->Cell(60,5,'',1,1,'C',1);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(60,5,utf8_decode('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, '),0,1);
    $pdf->Cell(60,5,utf8_decode(' quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure .'),0,1);
    $pdf->Image('../src/img/pie.png',0,275,210,10);
    
    $pdf->Ln(10);
    $pdf ->SetFont('helvetica','B',7.7);
    $pdf->Cell(60,5,utf8_decode('FOTOGRAFIAS DEL O LA DERECHOHABIENTE, CÓNYUGE (PADRE, MADRE) Y PERSONA AUTORIZADA PARA RECOGER AL NIÑO O A LA NIÑA'),0,1);
    $pdf->Image('../src/img/foto1.png',40,20,25,30);
    $pdf->Image('../src/img/foto1.png',90,20,25,30);
    $pdf->Image('../src/img/foto1.png',140,20,25,30);
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
    $pdf->Ln(5);
    $pdf->Cell(49);
    $pdf ->SetFont('helvetica','',11);
    $pdf->Cell(35,5,utf8_decode('Ciudad de México a'),0,0,'C');
    $pdf ->SetFont('helvetica','B',11);
    $pdf->Cell(8,5,'13',0,0,'C',1);
    $pdf ->SetFont('helvetica','',11);
    $pdf->Cell(5,5,utf8_decode('de'),0,0,'C');
    $pdf ->SetFont('helvetica','B',11);
    $pdf->Cell(25,5,'NOVIEMBRE',0,0,'C',1);
    $pdf ->SetFont('helvetica','',11);
    $pdf->Cell(5,5,utf8_decode('de'),0,0,'C');
    $pdf ->SetFont('helvetica','B',11);
    $pdf->Cell(12,5,'2022',0,1,'C',1);
    $pdf->Ln(10);
    $pdf->Cell(50);
    $pdf->Cell(90,10,'',0,1,'C',1);
    $pdf->Cell(50);
    $pdf ->SetFont('helvetica','B',11);
    $pdf->Cell(90,5,utf8_decode('Nombre y firma del o la derechohabiente'),'T',1,'C');
    $pdf ->SetFont('helvetica','',6.7);
    $pdf->Cell(130);
    $pdf->Cell(10,5,utf8_decode('Firmar en color azul'),0,1);
    $pdf->Output('F', '../generadosPdf/inscripcion.pdf', true);
  }
    
}
//prueba namas para ver que funcione
$ej = new Pdf('este es 1', 'este es dos');
 $ej->crearPdf();

 include __DIR__ . '/../pruba.php';
 $mail->addAttachment( '../generadosPdf/inscripcion.pdf', 'Registro_Info.pdf');
 if( $mail->send()) {echo 'se envio el pdf';}
 
 unlink('../generadosPdf/inscripcion.pdf');
 