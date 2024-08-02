<?php
error_reporting(0);
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
// $Password = $_POST["Password"];
// $subject = "Enquiry";

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail ->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host ="smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username ="rakeshsingh7645ji@gmail.com";
$mail->Password ="fhdrmbkptfjazrxh";

// $mail->setFrom($UPI_Registration_Number, $bankname);

$mail->addAddress("roshank59016@gmail.com", "roshank59016");

// $mail->subject = $subject;
// $mail->Amount = $Amount;
$mail->Body = "Name : $name \r\n email : $email \r\n phone : $phone \r\n message : $message";

$mail->send();

echo "<script>alert('Enquiry Submited Successfully')</script>";

echo "<script>window.open('contact.php','_self')</script>";

?>