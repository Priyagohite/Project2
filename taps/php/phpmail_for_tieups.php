<?php
if(isset($_POST['organization'])){
require 'PHPMailerAutoload.php';
require 'credential.php';
$mail = new PHPMailer;
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$company_name = $_POST['company_name'];
$city = $_POST['city'];
   $message ='
      <h2>Company Details for Tieup</h2><br><br>
       Name ->'.$name.'<br>
       Phone no ->'.$phone.'<br>
       Email ->'.$email.'<br>
       Company name ->'.$company_name.'<br>
       City ->'.$city.'<br>
   
        
    ';
//$mail0->SMTPDebug = 4;                               // Enable verbose debug output
$emails="thetapsindia@gmail.com";               // mail: roseintelligence1a@gmail.com
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sandeep.singh.tech11@gmail.com';                 // SMTP username
$mail->Password = 'mahakal@123';                           // SMTP password
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

$mail->Subject = 'Request for Organization Tieup';
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
 
}
}

if(isset($_POST['franchise'])){
require 'PHPMailerAutoload.php';
require 'credential.php';
$mail = new PHPMailer;
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$company_name = $_POST['company_name'];
$city = $_POST['city'];
   $message ='
      <h2>For Franchise Details</h2><br><br>
       Name ->'.$name.'<br>
       Phone no ->'.$phone.'<br>
       Email ->'.$email.'<br>
       Company name ->'.$company_name.'<br>
       City ->'.$city.'<br>
   
        
    ';
//$mail0->SMTPDebug = 4;                               // Enable verbose debug output
$emails="thetapsindia@gmail.com";               // mail: roseintelligence1a@gmail.com
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sandeep.singh.tech11@gmail.com';                 // SMTP username
$mail->Password = 'mahakal@123';                           // SMTP password
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

$mail->Subject = 'Request for Franchise';
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  
}
}
?> 