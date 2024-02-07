<?php
session_start();
require 'PHPMailerAutoload.php';
require 'credential.php';
$mail = new PHPMailer;
$amount=$_SESSION['amount'];
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$vehicle_image=$_SESSION['vehicle_image'];
$vehicle=$_SESSION['vehicle'];
$from=$_SESSION['from'];
$to=$_SESSION['to'];
$stay_time=$_SESSION['stay_time'];
$phone=$_SESSION['phone'];
$payment_status="Cash after service";
if(isset($_POST['payment_id'])){
     $payment_id=$_POST['payment_id'];
    $payment_status = "PAID";
}else{
    $payment_id="NULL";
}

   $message ='
<!DOCTYPE html>
<html>
<head>
  <title>Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}

.fa:hover {
  opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-instagram {
  background: #e95950;
  color: white;
}

</style>
</head>
<body class="bg-light">
<div class="g-4 container bg-white">
     <a href="" style="text-decoration: none"> <h2 class="text-center mt-4" style="color: #6f42c1;">TAPS Order</h2></a><br>
     <a href=""><img src="https://thetaps.in/'.$_SESSION['vehicle_image'].'.jpg" style="width:100%; height: auto"></a>
         <p class="text-secondary">Coustomer Name -> '.$name.'</p>
         <p class="text-secondary">Coustomer Email -> '.$email.'</p>
         <p class="text-secondary">Coustomer Phone no -> '.$phone.'</p>
         <p class="text-secondary">FROM -> '.$from.'</p>
         <p class="text-secondary">TO -> '.$to.'</p>
         <p class="text-secondary">Stay time ->'.$stay_time.'</p>
         <p class="text-secondary">Payment Status ->'.$payment_status.'</p>
         <p class="text-secondary">Payment ID ->'.$payment_id.'</p>
         <hr>
         <p class="text-secondary">Total Amount ->'.$amount.'</p>
         
</div>
</body>
</html>
      ';

  
//$mail->SMTPDebug = 4;                               // Enable verbose debug output
          // mail: roseintelligence1a@gmail.com
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'priyagoh7@gmail.com';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('priyagoh7@gmail.com', 'TAPS');

$mail->addAddress("thetapsindia@gmail.com");  // Add a recipient


              // Name is optional
// $mail->addReplyTo(EMAIL);
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('windsontrust.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Order';
$mail->Body    = $message;
$mail->AltBody = '';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error:' . $mail->ErrorInfo;
} 
// else {
//       echo 'Message has been sent';
//      $mail->clearAddresses();
//     header("location: success.html");
//  }
?>