<?php
require 'PHPMailerAutoload.php';
require 'credential.php';
$mail = new PHPMailer;
   $message ='
       Your one time TAPS password is '.$otp.'
   
        
    ';
//$mail0->SMTPDebug = 4;                               // Enable verbose debug output
$emails=$email;               // mail: roseintelligence1a@gmail.com
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sandeep.singh.tech11@gmail.com';                 // SMTP username
$mail->Password = 'Sandeep@123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('sandeep.singh.tech11@gmail.com', 'TAPS INDIA');
$mail->addAddress($emails);     // Add a recipient
              // Name is optional
// $mail->addReplyTo(EMAIL);
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'TAPS OTP';
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    ?>
<div class="alert alert-success" role="alert">
  We have sent an OTP to your email!
</div>
    <?php
}
?> 