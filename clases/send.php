<?php
require '../PHPMailer/PHPMailerAutoload.php';

$mail=new PHPMailer;

$to="ucangulosamuel@gmail.com";

$nombre = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = nl2br($_POST['mensaje']);

if ($nombre == "" || $email == "" || $asunto == "" || $mensaje == ""):
	echo '<div class="alert alert-danger">Todos los campos deben ser llenados para enviar el mensaje</div>';
else:
	$mail->From=$email;
	$mail->addAddress($to);
	$mail->Subject=$asunto;
	$mail->isHtml(true);
	$mail->Body=$nombre.' le ha contactado desde su web con el siguiente mensaje: <br><p>'.$mensaje.'</p>';
	$mail->CharSet = 'UTF-8';
	$mail->send();
endif;
?>