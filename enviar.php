<?php
$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$correo=$_POST['txtCorreo'];
$comentarios=$_POST['txtComentarios'];

$body="Nombre: ".$nombre. "<br>Apellido:".$apellido. "<br>Correo:".$correo. "<br>Comentarios:".$comentarios;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
     // Configuración del servidor 
    $mail->SMTPDebug = 0;                       // Habilita la salida de depuración detallada y ver los errores al enviar el correo
    $mail->isSMTP();                                           // Enviar usando SMTP 
    $mail->Host       = 'smtp.gmail.com';                   // Configure el servidor SMTP para enviar a través de usuario SMTP
    $mail->SMTPAuth   = true;                                  // Habilita la autenticación SMTP 
    $mail->Username   = 'joelgomez451@gmail.com';                     // SMTP username
    $mail->Password   = 'clave';                               // SMTP password
    $mail->SMTPSecure = 'tls';        
    $mail->Port       = 587;                                   // Puerto TCP para conectarse

    // Destinatarios 
    $mail->setFrom('joelgomez451@gmail.com',$nombre);
    $mail->addAddress('joelgomez451@gmail.com');     
   
  // Contenido 
    $mail->isHTML(true); //Establecer el formato de correo electrónico en HTML                                
    $mail->Subject = 'Formulario de contacto';
    $mail->Body    = $body;
    $mail->CharSet=UTF_8;
    $mail->send();
    echo '<script>
    alert("El mensaje ha sido enviado correctamente");
   window.location=document.referrer;


        </script>';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}