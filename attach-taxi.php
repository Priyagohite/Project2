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
    <link rel="stylesheet" href="attach.css">

    <title>Special offers</title>
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
                                <a class="nav-link font-light active" href="attach-taxi.php">Saathi Registration</a>
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
                                <a class="nav-link font-light" href="organization.php">Organization</a>
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

    <section class="section">
        <div class="container">
            <h1>Attach Taxi</h1>
            <h5>Join with the TAPS & enjoy your ride!</h5>
        </div>
    </section>

    <section class="section-2">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="container">
                    <?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin_code = $_POST['pincode'];
require 'php/PHPMailerAutoload.php';
require 'php/credential.php';
$mail = new PHPMailer;
   $message ='
      <h2> Details for attach taxi </h2><br>
      Name '.$name.'<br>
      Email '.$email.'<br>
      Phone no. '.$phone.'<br>
      Address '.$address.' <br>
      City '.$city.' <br>
      State '.$state.'<br>
      Pin Code '.$pin_code.'
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

$mail->Subject = 'Attach Taxi';
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    ?>
<div class="alert alert-success" role="alert">
  Your request for attach your taxi has been sent to our TAPS team we will connect you within 2 business days !
</div>
    <?php
}
}
?> 
<br>
                    <h3>FAQ for attach Taxi</h3>
                    <div class="container-fluid form">
                        <form action="" method="POST">
                            <div class="box">
                                <label for="">Full name :</label>
                                <input type="text" name="name">
                            </div>
                            <div class="box">
                                <label for="">Phone number :</label>
                                <input type="text" name="phone">
                            </div>
                            <div class="box">
                                <label for="">Email Id :</label>
                                <input type="email" name="email">
                            </div>
                            <div class="box">
                                <label for="">Address :</label>
                                <input type="text" name="address">
                            </div>
                            <div class="box">
                                <label for="">City :</label>
                                <input type="text" name="city">
                            </div>
                            <div class="box">
                                <label for="">State :</label>
                                <input type="text" name="state">
                            </div>
                            <div class="box">
                                <label for="">Pin code :</label>
                                <input type="text" name="pincode">
                            </div>

                            <div class="button">
                                <button type="submit" name="submit" class="btn">Submit Now</button>
                            </div>
                        </form>
                    

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p>Tell Us Your Cab Availability at : Cabs Availability Form</p>
                <div class="container-fluid shadow-lg contact">
                    <h4>Contact Our team</h4>
                    <h5><i class="fas fa-envelope"></i> tapscab890@gmail.com</h5>
                    <h5><i class="fas fa-mobile-alt"></i> 456289567</h5>
                    <h5><i class="fas fa-mobile-alt"></i> 4352617894</h5>
                    <h5><i class="fab fa-whatsapp"></i> 86754 45637</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="section-1">
        <div class="container">
            <h3>About Benefits of Our Cab Attachment Service</h3>
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="card-image">
                        <img src="./images/s1.jfif" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card-image">
                        <img src="./images/s2.jfif" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card-image">
                        <img src="./images/s3.jfif" alt="">
                    </div>
                </div>
            </div>

            <div class="content">
                <p>Does your car that sits in the garage for months, upsets you? Are you looking for a method to get
                    your
                    car back on the road while making a generous amount of money? And you must be wondering – where
                    should I
                    attach car to company or attach my taxi? Where should I attach my company in India?
                    Well, your quest ends here! We, India’s most trusted cab vendor enables you to attach your car in
                    our
                    cab network. You can become a partner with Chiku Cab LLP AAT-9943 through our online cab attachment
                    feature and get a chance to make lucrative earnings. Do not miss the opportunity to grow as an
                    entrepreneur with car attachment. Our taxi attachment service is a great option to attach your
                    commercial vehicle. We enjoys a huge surge of customers looking for bookings in travel, outstation,
                    one-way, round trip, airport pick up and drops from all over India.
                </p>
                <p>We attach the following taxi's and cars for one way, round trip, airport transfer (pick up or drop ),
                    local (8hr,12hr), taxi package, tour package, corporate car rental, and multicity tour; which all
                    fall into the following categories given below-
                <ul>
                    <li>In Compact (i-10, TATA Indica, Toyota Liva, Ford Figo, Datsun Go, Swift, Tata Bolt, Renault
                        Pulse, Maruti Wagoner)</li>
                    <li>In Sedan (Dzier Tour, Dzier vdi, Etios, Honda Amaze, Tata Zest, Tata Tigor, Hyundai Xcent)
                    </li>
                    <li> In SUV (Ertiga, Innova, Innova Crysta, Xylo, Similar type)</li>
                </ul>
                </p>

                <p>Chiku Cab is a valid option for everyone looking for company car attachment or company cab
                    attachment. Doesn't matter if you attach a cab, attach a taxi, and attach your car with company, we
                    ensure daily customers that suit your service. Our Attach Your Taxi service is an online; hence it
                    offers:
                <ul>
                    <li>Outstation taxi attachment</li>
                    <li>One way cab attachment</li>
                    <li>Attach my car for outstation</li>
                </ul>
                </p>
            </div>
        </div>
    </section>

    <section class="section-3">
        <div class="container p-3">
            <h4>How to Attach Your Taxi with Taps Cab</h4>
            <p>You can join us as Driver cum owner/Single cab owner/fleet operator(more than one cab with multiple
                drivers). You can attach your any type of cab (Compact/Sedan/SUV/Tempotraveller) with commercial number
                plate only. You need to share the below mention cab documents, driver details and owner details for
                registration process. Please add information about yourself, car and drivers who will drive for your
                company. We need the following documents for Vendor/DCO/Fleet operators-</p>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card">
                            <h5>1. Vendor/DCO/Fleet operator</h5>
                            <ul>
                                <li>Address Proof</li>
                                <li>Office Details with GST (if applicable )</li>
                                <li>Passport type photo</li>
                                <li>Adhaar card</li>
                                <li>PAN card</li>
                                <li>Driving Licence</li>
                                <li>Phone number (at least two number)</li>
                                <li>Bank Account Details (Account Holder name, IFSC code, Account Number and one cancel
                                    cheque copy)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card">
                            <h5>2. Driver Details</h5>
                            <ul>
                                <li>Passport type photo</li>
                                <li>Adhaar card</li>
                                <li>PAN Card</li>
                                <li>Driving Licence</li>
                                <li>Reference person contact number (with adhaar card)</li>
                                <li>Phone Number (at least two number)</li>
                                <li><strong>Police Verification Details (it is Mandatory )</strong></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card">
                            <h5>3. Cab/Taxi Registration Paper required</h5>
                            <ul>
                                <li>Cab/Taxi photo from front side /back side with Yellow number plate</li>
                                <li>RC (Registration Copy)</li>
                                <li>Lease Paper (if cab is not yours)</li>
                                <li>Insurance Paper</li>
                                <li>Route Permit Paper</li>
                                <li>Pollution Certificate</li>
                                <li>Fitness certificates for the cab/taxi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-4">
        <div class="container p-5">
            <h4>Commission Policy:</h4>
            <p>Company will charge only 7% (Including 5% GST on Total Booking Amount) commission on vendor amount for
                every assignedbooking. You have to recharge your driver application wallet to get or acceptthe booking.
                Your driver wallet recharge amount varies according to vendor/driver category (Silver/Gold/Diamond). You
                need to maintain a minimum lock amount in your wallet that would be Rs.1200/-for Compact/Sedan and
                Rs.1500/- for SUV category cab. It’s to be noted that Recharge amount is not a security amount and it is
                not refundable in any case since our commission against each booking is deducted from this recharge
                wallet itself.</p>
        </div>
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