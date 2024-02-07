<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="organization.css">

    <title>organization</title>
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><i class="fas fa-street-view"></i>Taps</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon d-flex justify-content-center align-items-center">
                            <i class="fas fa-bars fa-2x"></i>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link font-light" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-light" href="pacakages.html">Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-light" href="attach-taxi.php">Saathi Registration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-light" href="franchise.php">Franchise</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-light" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-light" href="offers.html">Offers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-light active" href="organization.php">Organization</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-light" href="notification.html">Notification</a>
                            </li>
                            <li class="nav-item"><a class="nav-link font-light" href="terms&condition.html">Terms&condition</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-light" href="cust.php">Cust info</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container hero-box">
            <div class="first-half text-pure">
                <p>A car for all your transport need.</p>
                <h3>Corporate Car Rental Service</h3>
                <p>Local and Intercity business travel at affordable prices</p>
            </div>
            <div class="sec-half">
                <div class="box text-pure p-4">
                    <h5>Leave your details here!</h5>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $company_name = $_POST['company_name'];
    $city = $_POST['city'];
 
require 'php/PHPMailerAutoload.php';
require 'php/credential.php';
$mail = new PHPMailer;
   $message ='
      <h2> Details for Franchise</h2><br>
      Name -> '.$name.'<br>
      Email -> '.$email.'<br>
      Phone no -> '.$phone.'<br>
      Company name -> '.$company_name.' <br>
      City -> '.$city.' <br>
     
    ';
//$mail0->SMTPDebug = 4;                               // Enable verbose debug output
$emails='thetapsindia@gmail.com';               // mail: roseintelligence1a@gmail.com
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
    ?>
<div class="alert alert-success" role="alert">
  Your request for Tieup has been sent to our TAPS team we will connect you within 2 business days !
</div>
    <?php
}
}
?> 
                    <div class="box-2">
                        <form action="" method="POST">
                            <input type="text" placeholder="Enter your name" class="name" name="name" required>
                            <input type="text" placeholder="Contact No" class="name" name="phone" required>
                            <input type="email" placeholder="Email Adress" class="name" name="email" required>
                            <input type="text" placeholder="Company name" class="name" name="company_name" required>
                            <input type="text" placeholder="City name" class="name" name="city" required>
                            <button type="submit" name="submit" class="btn">Confirm Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-2"></section>

    <section class="p-5">
        <h3>Taps Cab Corporate Program – A Car for All Your Transport Needs</h3>
        <p>Whether it is daily pick up and drop or transferring an employee to the airport from your office, Taps Cab is
            a one-stop solution for all your travel needs. Get the best-of-ride experience to the staff in your
            organization with our corporate car rental or business transport solution.</p>
        <p>There are different packages for corporates, including hourly rental and daily rental. We offer
            well-maintained cars with experienced drivers to corporate companies at competitive rates on premium/luxury
            car rental choices. Whether you want Hatchbacks, Sedans, or SUVs, Chiku Cab can arrange. We customize your
            rides with a multi-stop &amp; wait for option, perfect for executives visiting various places in the same
            ride. For frequent travellers or your guests, get <strong>Taps</strong></a> benefit of airport pickup &amp;
            drop service. We offer convergent daily travel for staff, travelling on a fixed-rate route alone or in a
            group.</p>
        <p>Car rental service nowadays is very much trending. With the modernization of technology and lifestyle, the
            usage of this service is increasing day by day. Not only individual users, this service is equally popular
            for the corporates as well as enterprises also. Previously companies used to keep their vehicle for official
            usage but now they are also having a tie-up with corporate car rental agencies to reduce the cost. You can
            enjoy the liberty to choose from different types of car as per the need. Also, luxury car rental is
            available for a special purpose.</p>
    </section>

    <section class="hero-3 p-5 d-flex flex-column justify-content-center">
        <h4>Here are the following services we offer</h4>
        <ul>
            <li>A Corporate cab for every occasion</li>
            <li>Ride to your client’s place </li>
            <li>Airport Transfer (Pickup/Drop) </li>
            <li>Visiting your various business</li>
            <li>Daily pick up &amp; drop for your employees</li>
            <li>Local travel by our hatchbacks, sedans, or SUVs.</li>
            <li>On-site business visits, including factory visits</li>
            <li>Guest pick up </li>
        </ul>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="footer-child-1">
                        <h5>Quick Links</h5>
                        <p>Home</p>
                        <p>Vehicles</p>
                        <p>Packages</p>
                        <p>Saathi registration</p>
                        <p>About</p>
                        <p>Offers</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="footer-child-2">
                        <h5>Services</h5>
                        <p>Local car rentals</p>
                        <p>Outstation cabs</p>
                        <p>One way cabs</p>
                        <p>Corporate car rental</p>
                        <p>Multi cities tour packages</p>
                    </div>
                </div>
                <div class="col-3 ">
                    <div class="footer-child-3">
                        <h5>Follow Us</h5>
                        <div class="icons d-flex flex-column">
                            <a href="#"><i class="fab fa-facebook-f"></i>
                                <span>facebook</span></a>
                            <a href="#"><i class="fab fa-instagram"></i>
                                <span>instagram</span></a>
                            <a href="#"><i class="fab fa-twitter"></i>
                                <span>twitter</span></a>
                            <a href="#"><i class="fab fa-google"></i>
                                <span>google</span></a>

                            <div class="app">
                                <div class="app-box">
                                    <h5>Download App</h5>
                                    <img src="./images/store.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="footer-child-4">
                        <h5>Contact us</h5>
                        <p><i class="fas fa-map-marker-alt"></i>Taps cab services</p>
                        <p>Vishwas Nagar,Pithampur-454775</p>
                        <p><i class="fas fa-mobile-alt"></i>1023-456-657</p>
                        <p><i class="fab fa-whatsapp"></i>8905-356-957</p>
                        <p><i class="fas fa-envelope"></i>tapsindia07@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="copyright d-flex justify-content-center">
            <p>copyright 2021- .tapscab.com</p>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>