<?php
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';

        //cuenta y password desde la que enviaremos el correo
        $mail->Username   = 'pruebaenviodecorreos1713@gmail.com';
        $mail->Password   = 'rendfhzlpjqsmctf';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //quien envia
        $mail->setFrom('pruebaEnvioDeCorreos1713@gmail.com', 'CENDI-IPN');
        //A quien le llega
        $mail->addAddress('georgejimenez257@gmail.com');


        //Añadimos el pdf creado
        //$mail->addAttachment('urldelarchivo', 'Registro_Info.pdf');

        //contenido del correo

        //Que el correo nos aceote HTML
        $mail->isHTML(true);
        $mail->Subject = 'Expediente de inscripción';
        $mail->Body = '<html><h1 style="text-align:center;">El PDF anexado contiene información acerca de la inscripción</h1></html>';
         $mail->CharSet = 'UTF-8';
      


