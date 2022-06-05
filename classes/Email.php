<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    public $email;
    public $nombre;
    public function __construct($email, $nombre)
    {
        $this->email = $email;
        $this->nombre = $nombre;
    }
    public function enviarPdf()
    {
    
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        //cuenta y password desde la que enviaremos el correo
        $mail->Username   = 'pruebaenviodecorreos1713@gmail.com';
        $mail->Password   = 'rendfhzlpjqsmctf';
        $mail->SMTPSecure = 'tls';
        $mail->CharSet = 'UTF-8'; 
        //quien envia
        $mail->setFrom('pruebaEnvioDeCorreos1713@gmail.com', 'CENDI-IPN');
        //A quien le llega
        $mail->addAddress($this->email);


        //Añadimos el pdf creado
        $mail->addAttachment(__DIR__ . '/../generadosPdf/inscripcion.pdf', 'Registro_Info.pdf');
        //Que el correo nos acepte HTML
        $mail->isHTML(true);
        $mail->Subject = 'Expediente de inscripción';
        $mail->Body = '<html>
        <h1 style="text-align:center;">El PDF anexado contiene información acerca de la inscripción</h1></html>';

       if( $mail->send()) {echo 'se envio';}
       //Eliminamos el pdf que se envia
       unlink(__DIR__ . '/../generadosPdf/inscripcion.pdf');
    }
}
