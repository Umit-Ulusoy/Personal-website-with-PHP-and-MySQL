<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'frameworks\PHPMailer\src\exception.php';
require 'frameworks\PHPMailer\src\PHPMailer.php';
require 'frameworks\PHPMailer\src\SMTP.php';

if(isset($_GET["contact"]))
{

 $firstname = security($_POST["firstname"]);
 $lastname = security($_POST["lastname"]);
 $subject = security($_POST["subject"]);
 $message = security($_POST["message"]);

$mail = new PHPMailer(true);


try
{

 //Server Settings
 $mail->SMTPDebug = SMTP::DEBUG_SERVER;
 $mail->isSMTP();
 $mail->Host = secuirty($settings->emailServer);
 $mail->SMTPAuth = true;
 $mail->Username = security($settings->email);
 $mail->Password = security($settings->password);
 $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
 $mail->Port = 465;

 //Setting Up Recipient
 $mail->setFrom('none@example.com');
 $mail->addAddress(security($settings->email), 'You have a new message');
 $mail->addReplyTo('noreply@example.com', 'Replying');

 //Content settings

 $mail->isHTML(true);
 $mail->Subject = $subject;
 $mail->Body = $message;
 $mail->AltBody = $message;

 $mail->send();
 echo "The mail has been sent";

}catch(Exception $e)
{
 echo "Mail could not be sent. Error Message: {$mail->ErrorInfo}";
}

}

?>