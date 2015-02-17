<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['name']) ) {
    header('Location: contact.php'); exit;
}
	
// get the posted data
$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$object = $_POST['asunto'];
$to="sam_edreiuc@live.com";

// write the email content
$email_content = "Se ha enviando el siguiente mensaje desde tu sitio web". "\r\n";
$email_content .= "mensaje:". "\r\n". "\r\n". $mensaje;

require_once '../swiftmailer/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('mx1.hostinger.mx', 2525)

      ->setUsername('sam_edreiuc@edreiuc.esy.es')
      ->setPassword('Internet19');


$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('SITIO-EDREIUC '.$object)
  ->setFrom(array($email => $nombre))
  ->setTo(array($to,'sam_edreiuc@edreiuc.esy.es'))
  ->setBody($email_content);

$result = $mailer->send($message);

    header('Location: ../contact.php?envio=ok'); exit;

?>
