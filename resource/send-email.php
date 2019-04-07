<?php
require 'class.phpmailer.php';
$config = require __DIR__ .'/../config/app.php';

/** 
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Port = 587; 
$mail->Host = 'smtp.gmail.com';
$mail->IsHTML(true);
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;
$mail->Username = 'cmurray4492@gmail.com';
$mail->Password = 'Fastslow2329!'; 

Sender Info
$mail->From = 'cmurray4492@gmail.com';
$mail->FromName = 'Saint Bartholomew - AFF';

*/

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = $config['mail']['transport'];
$mail->SMTPSecure = $config['mail']['encrption'];
$mail->Port = $config['mail']['port'];
$mail->Host = $config['mail']['host'];
$mail->IsHTML(true);

$mail->SMTPAuth = true;
$mail->Username = $config['mail']['username'];
$mail->Password = $config['mail']['password'];

//Sender Info
$mail->From = $config['mail']['from'];
$mail->FromName = $config['mail']['sender_name'];