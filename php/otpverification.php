<?php
 session_start();
 ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
      <style type="text/css">
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
        display: none;
    }
    </style>
</head>
<body>


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">

<?php
function validation()
{
    $otp=$_SESSION['otp'];
    $checkotp=$_POST["otp"];
    if ($checkotp == $otp) {
      header("location:registration.php");
    }else{
      ?>
        <br>
         <div class="alert alert-danger" role="alert">
          OPT is invalid !!
        </div>
      <?php
    }
}
if(isset($_POST['submitt']))
{
   validation();
} 
?>


<?php 
if(isset($_SESSION['submit'])){
 $phone= $_SESSION['phone'];
 $email= $_SESSION['email'];
 $_SESSION['name'];
 include 'dbconnect.php';
$s= "SELECT * FROM `userdata` WHERE email='$email'";
$result=mysqli_query($con,$s);
if(mysqli_num_rows($result)==1){
 ?>
 <script type="text/javascript">
     alert("Email has already taken");
     window.location.href = "index.html";
 </script>
 <?php
}else{
    $sql= "SELECT * FROM `userdata` WHERE phone_no='$phone'";
$resultt=mysqli_query($con,$sql);
if(mysqli_num_rows($resultt)==1){
 ?>
 <script type="text/javascript">
     alert("Phone number has already taken");
     window.location.href = "../index.php";
 </script>
 <?php
}else{

$otp = random_int(100000, 999999);
$_SESSION['otp'] = $otp;

  $invite_code = $_SESSION['invite'];
 $pass= $_SESSION['pass'];
  // $_SESSION['phone'] = $phone;
  // $_SESSION['email'] = $email;
  // $_SESSION['invite'] = $invite_code;
  // $_SESSION['pass'] = $pass;


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
  }
 }
}
?> 
<br>
                        <h2 class="form-title">Enter OTP</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="otp"><i class="zmdi zmdi-email"></i></label>
                                <input type="number" name="otp" onkeyup="checkotp()" id="otp" placeholder="Enter Your OTP"/>
                                <span id="msg"></span>
                            </div>
  <script type="text/javascript">
         function checkotp(){
             var otp = <?php echo json_encode($otp); ?>;
         var a=document.getElementById("otp").value;
         if(otp == a){
          msg="Correct";
         }else if(otp == ''){
             msg="Please get otp first";
         }else{
             msg="Please enter a valid OTP";
         }
           document.getElementById("msg").innerText=msg;
   }
  </script>
                            <div class="form-group form-button">
                                <input type="submit" name="submitt" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>

                    <div class="signup-image">
                        <figure><img src="../images/taxi.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>