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
    <link rel="stylesheet" href="css/style.css">
      <style type="text/css">
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
        display: none;
    }
    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" name="phone" id="phone" placeholder="Enter Your Phone number" required/>
                            </div>
                            <div class="form-group">
                                <label for="invite"><i class="zmdi zmdi-code"></i></label>
                                <input type="number" name="invite" id="invite" placeholder="Enter Your Invite-code (Optional)"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
<?php
include 'php/dbconnect.php';
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $sqll = "SELECT * FROM userdata WHERE email ='$email'";
    $resultt = mysqli_query($con,$sqll);
    $numm = mysqli_num_rows($resultt);
    if($numm==1){
             ?>
      <br>
      <div class="alert alert-danger" role="alert">
        Email already exist try with other email id !
      </div>
      <?php
        
    }else{
    if ($_POST['invite']!=NULL) {
    $invite=$_POST['invite'];
    $_SESSION['invite']=$invite;
    $sql = "SELECT * FROM userdata WHERE invitation ='$invite'";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    if($num==0){
         ?>
      <br>
      <div class="alert alert-danger" role="alert">
         Invite code is invalid !
      </div>
      <?php
    }else{
         
         $_SESSION['submit']=$_POST['submit'];
         $_SESSION['invite']=$_POST['invite'];
         $_SESSION['name']=$_POST['name'];
         $_SESSION['email']=$_POST['email'];
         $_SESSION['pass']=$_POST['pass'];
         $_SESSION['phone']=$_POST['phone'];        
        header('location: php/otpverification.php');      
    }
}else{
         $_SESSION['submit']=$_POST['submit'];
         $_SESSION['invite']=NULL;
         $_SESSION['name']=$_POST['name'];
         $_SESSION['email']=$_POST['email'];
         $_SESSION['pass']=$_POST['pass'];
         $_SESSION['phone']=$_POST['phone'];        
        header('location: php/otpverification.php');   
   }
  }
 }
?>
                    </div>

                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
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