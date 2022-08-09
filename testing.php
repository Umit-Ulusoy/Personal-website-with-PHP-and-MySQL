<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'frameworks\PHPMailer\src\exception.php';
require 'frameworks\PHPMailer\src\PHPMailer.php';
require 'frameworks\PHPMailer\src\SMTP.php';


$mail = new PHPMailer(true);
$mail->setLanguage('tr');


try
{

 //Server Settings
 $mail->SMTPDebug = SMTP::DEBUG_SERVER;
 $mail->isSMTP();
 $mail->Host = 'smtp.gmail.com';
 $mail->SMTPAuth = true;
 $mail->Username = 'mesajsistemi01@gmail.com';
 $mail->Password = '1021939180011x';
 $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
 $mail->Port = 465;

 //Setting Recipient
 $mail->setFrom('iletisim@umitulusoy.com');
 $mail->addAddress('mesajsistemi01@gmail.com', 'Ana Hesap');
 $mail->addReplyTo('noreply@example.com', 'Replying');

 //Content settings

 $mail->isHTML(true);
 $mail->Subject = 'This is the Subject';
 $mail->Body = 'And this is the Body';
 $mail->AltBody = 'and this is the Alt Body for None-HTML Clients';

 $mail->send();
 echo "The mail has been sent";

}catch(Exception $e)
{
 echo "Mail could not be sent. Error Message: {$mail->ErrorInfo}";
}

?>