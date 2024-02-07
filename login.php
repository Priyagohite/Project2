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
    <title>Login</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

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

       
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form action="" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="user_id" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>

                        <?php
                        if(isset($_POST['submit'])){
                         if($_SESSION['check']==1){
                         include 'php/dbconnect.php';
                            $_SESSION['km'];
                            $_SESSION['stay_time'];
                            $_SESSION['from'];
                            $_SESSION['to'];
                            $_SESSION['charge'];  
                            
                         $email= $_POST['user_id'];
                         $pass= $_POST['pass'];
 
                         $s="SELECT * FROM `userdata` WHERE email='$email' AND password='$pass'";
                          $result = mysqli_query($con, $s);
                          $num = mysqli_num_rows($result);
                          if($num==1){
                              setcookie('username',$email,time()+60*60*24, '/');
                              setcookie('password',$pass,time()+60*60*24, '/');
                          $_SESSION['u_id']=$_POST['user_id'];
                             //  header('location:php/check_signin.php');
                            ?>
                            <script>
                                window.location.href="php/check_signin.php";
                            </script>
                            <?php
                            }else{
                                ?>
                                <br>
                                <div class="alert alert-danger" role="alert">
                                   You have entered wrong username or password !
                                </div>
                                <?php
                            }
                           }
                        if($_SESSION['check']==2){
                        include 'php/dbconnect.php';
                         $email= $_POST['user_id'];
                         $pass= $_POST['pass'];
                            $_SESSION['charge'];
                         $s="SELECT * FROM `userdata` WHERE email='$email' AND password='$pass'";
                          $result = mysqli_query($con, $s);
                          $num = mysqli_num_rows($result);
                          if($num==1){
                              setcookie('username',$email,time()+60*60*24, '/');
                              setcookie('password',$pass,time()+60*60*24, '/');
                       $_SESSION['u_id']=$_POST['user_id'];
                            //  header('location:php/check_signin.php');
                            ?>
                            <script>
                                window.location.href="php/check_signin.php";
                            </script>
                            <?php
                            }else{
                                ?>
                                <br>
                                <div class="alert alert-danger" role="alert">
                                   You have entered wrong username or password !
                                </div>
                                <?php
                            }
                          }
                         }
                        ?>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
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
<?php
ob_end_flush();
?>