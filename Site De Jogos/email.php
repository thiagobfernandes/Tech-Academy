<?php 

echo "<html><body>";
        echo "<script type='text/javascript'>window.location.href = 'index.php#myform';</script>";
        echo "</body></html>";

$nome=$_POST["nome"];
$mensagem=$_POST["mensagem"];
$email=$_POST["email"];



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclua os arquivos do PHPMailer manualmente
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';



// create a new object
$mail = new PHPMailer();
// configure an SMTP
$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = '47aabd5f43ca71';
$mail->Password = 'e1423965caabb2';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->setFrom('mailtrap@demomailtrap.com', 'thiago');
$mail->addAddress("$email", $nome);
$mail->Subject = $nome;
// Set HTML 
$mail->isHTML(TRUE);
$mail->Body = "<html><strong>nome : </strong>  $nome <br> <strong> email:  </strong>  $email  <br> <strong> mensagem:</strong>  $mensagem </html>";
$mail->AltBody = 'Hi there, we are happy to confirm your booking. Please check the document in the attachment.';
// add attachment 
// just add the '/path/to/file.pdf'
$attachmentPath = './confirmations/yourbooking.pdf';
if (file_exists($attachmentPath)) {
    $mail->addAttachment($attachmentPath, 'yourbooking.pdf');
}

// send the message
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>