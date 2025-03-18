<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'ninadgawade149@gmail.com'; // Your gmail
$mail->Password = 'miuftquymhxneyqc'; // Your gmail app password
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('ninadgawade149@gmail.com'); // Your gmail
$mail->addAddress($_POST["email"]);

$mail->isHTML (true);
$mail->Subject = $_POST["subject"];
$bodyContent = "Name :- " . $_POST['name'] . "<br>" . " email :- " . $_POST['email'] . "<br>" . " message :- " . $_POST['message'] ;
$mail->Body    = $bodyContent;


$mail->send();

echo
"
<script>
alert('Sent Successfully');
document.location.href= 'contact.php';
</script>
";
}
?>
