<?php
session_start();
ob_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Taps</title>
  </head>
  <body>
    
  <header class="topbar">
      <div class="container flex justify-between items-center">
          <div class="icons flex items-center">
              <h5><i class="fas fa-phone-alt"></i>Call us: 84123 45678</h5>
              <h5><i class="fas fa-envelope"></i>E-mail : support@gmail.com</h5>
          </div>
          <div class="auth flex items-center">
          <div>
              <i class="fas fa-sign-in-alt"></i>
              <a href="#exampleModal" data-bs-toggle="modal">Login</a>
          </div>
              <span class="divider">|</span>
          <div>
            <i class="fas fa-user-plus"></i>
            <a href="#exampleModal2" data-bs-toggle="modal">Sign Up</a>
            </div>
          <span class="divider">|</span>
          </div>
          </div>
  </header>

<header class="nav-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
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
                                <a class="nav-link font-light active" aria-current="page" href="index.php">Home</a>
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


<header class="hero flex items-center">
                        <div class="container-2 shadow-lg">
                    <form action="" method="POST">
                        <div class="departure-box">
                            <div class="input-box">
                                <p>From City </p>
                                <input type="text" name="address" required>
                            </div>
                            <div class="input-box">
                                <p>Destination City</p>
                                <input type="text" name="address1" required>
                            </div>
                            <div class="input-box">
                                <p>Travel date</p>
                                <div class="date">
                                    <input type="date" name="Tdate" value="<?php echo date('Y-m-d'); ?>" required>
                                    <input type="time" name="Ttime" required>
                                </div>
                            </div>
                            <div class="input-box">
                               <!--  <p class="col">Return date</p>
                                <div class="date">
                                    <input type="date" name="Rdate">
                                </div> -->
                                <p>Stay time</p>
                                 <div class="date">
                                  <select name="Staytime" required> 
                                      <option value="0 hours">0 hours</option>
                                      <option value="2 hours">2 hours</option>
                                  </select>
                                </div>
                                
                            </div>
                        </div>
                        <div class="button">
                            <button class="btn" type="submit" name="submit">Check Charge</button>
                        </div>
                        <br>
                    </form>

          <?php
               if(isset($_POST['submit'])){
                 $_POST['address'];
                 $_POST['address1'];
                 $_POST['Ttime'];

                 //date difference

                $travel_date = date('d', strtotime($_POST['Tdate']));
                $current_date = date('d');
                $date_difference = $travel_date - $current_date;

                 // month difference

                 $travel_month = date('m', strtotime($_POST['Tdate']));
                $current_month = date('m');
                $month_difference =$travel_month - $current_month;

                 // Year difference

                 $travel_year = date('Y', strtotime($_POST['Tdate']));
                 $current_year = date('Y');
                 $year_difference =  $travel_year - $current_year;               
                 
                 //time difference

                // $travel_time = date('h', strtotime($_POST['Ttime']));
                //  $travel_time;
                //  $return_time = date('h', strtotime($_POST['Rtime']));
                // $return_time;

                // AM OR PM

                // $AM = date('A', strtotime($_POST['Ttime']));
                // $PM = date('A', strtotime($_POST['Rtime']));

 
                if($date_difference < 0 && $month_difference < 0 && $year_difference < 0){
                 ?>
                <div class="alert alert-info" role="alert">
                 You can'nt choose any past time!
                </div>

                <?php
                }
               
               else if($month_difference < 0 && $year_difference == 0){
                 ?>
                <div class="alert alert-info" role="alert">
                 You can'nt choose any past Month!
                </div>

                <?php
                 }
                 else if($date_difference < 0 && $month_difference == 0 && $year_difference == 0){
                 ?>
                <div class="alert alert-info" role="alert">
                 You can'nt choose any past date!
                </div>

                <?php
                 }else{
                      $_SESSION['submit'] = $_POST['submit'];
                  $_SESSION['address']=$_POST['address'];
                  $_SESSION['address1']=$_POST['address1'];
                  $_SESSION['tdate']=$_POST['Ttime'];
                  $_SESSION['ttime']=$_POST['Tdate'];
                  $_SESSION['staytime']=$_POST['Staytime'];
                  header("location: php/get_km.php");
                 }
             }
               ?>  

                    </div>
                </header>
           
<section class="special">
                    <div class="container">
                        <h1 class="section-heading">Today's Special</h1>
                        <div class="wrapper flex">
                            <div class="flex-1">
                                <img src="./images/taxi.jpg" alt="">
                            </div>
                            <div class="flex-1">
                                <h2>Information About Today's Special</h2>
                                <p>Online taxi booking not only helps you with best prices but also helps you with the
                                    convenience
                                    of paying through multiple payment options (like Debit Card, Credit Card, eWallets
                                    etc.).
                                    You
                                    can easily compare prices and choose various categories of cabs like Hatchback cars,
                                    Sedan
                                    and
                                    SUV.From Goibibo you can get confirmed cheap cabs of your choice and budget. Expert
                                    and
                                    verified
                                    drivers will be taken care of your ride. Easy interface of booking with different
                                    payment
                                    modes
                                    available at Goibibo and finally with no hidden charges, Goibibo is the best option
                                    for
                                    online
                                    taxi booking.</p>
                                <button class="btn btn-secondary">Read More</button>
                            </div>
                        </div>
                    </div>
</section>

<section class="section">
                    <div class="container-fluid p-4">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <div class="card">
                                    <h2>Emergency Services</h2>
                                    <p>You need to urgently organize a pick-up for family ,you can simply hire a taxi or
                                        rent a car
                                        with
                                        our TAPS app that offers 24*7 Customer Support 88456 89745</p>
                                    <button class="btn btn-secondary">Read More</button>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="card">
                                    <h2 class="text-primary2">Pre-Booking</h2>
                                    <p>You need to urgently organize a pick-up for family ,you can simply hire a taxi or
                                        rent a car
                                        with
                                        our TAPS app that offers 24*7 Customer Support 88456 89745</p>
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="card">
                                    <h2>Ontime Booking</h2>
                                    <p>You need to urgently organize a pick-up for family ,you can simply hire a taxi or
                                        rent a car
                                        with
                                        our TAPS app that offers 24*7 Customer Support 88456 89745</p>
                                    <button class="btn btn-secondary">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
</section>

<section class="benefits">
                    <div class="container">
                        <h1 class="section-heading text-pure">Benefits of booking on TAPS</h1>
                        <div class="main flex justify-center items-center">
                            <div class="card" style=" margin-right: 2rem; background-color: var(--light);">
                                <img src="./images/card2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">The right way to getting through your everyday travel needs.
                                        Taps is
                                        availabe 24/7 and you'll book and travel in a moment. With rides ranging from
                                        your
                                        pocket
                                        budget you'll choose between a good range of options! you'll also prefer to do
                                        your bit
                                        for
                                        the environmentwith Taps.</p>
                                </div>
                            </div>

                            <div class="card" style=" margin-right: 2rem; background-color: var(--light);">
                                <img src="./images/card1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Last out of town at affordable one way and round trip fares
                                        with taps
                                        intercity travel service choose between a variety of AC cabs driven by top
                                        partners,
                                        available in 3 hour,or reserve to 7 days beforehand. we've you covered across
                                        India with
                                        a
                                        presence in 100+ cities with over 800+ routes!</p>
                                </div>
                            </div>

                            <div class="card" style="margin-right: 2rem; background-color: var(--light);">
                                <img src="./images/cab4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">With Taps Rentals you get a cab at your disposal. So be it a
                                        day-long
                                        business meeting,shopping trip together with your friends,or simply each day
                                        call at a
                                        replacement city, we've you covered. Pacakages start at 1 hour and may be
                                        extended up to
                                        12
                                        hours!</p>
                                </div>
                            </div>
                        </div>
                    </div>
</section>

<section class="contact-us flex">
                    <div class="contact-info-wrapper">
                        <h1 class="section-heading">Contact us</h1>
                        <div class="contact-info">
                            <div>
                                <div>
                                    <i class="fas fa-phone-volume"></i>
                                    <div>
                                        <span>Call Us</span>
                                        <span>822 456 7898</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="fas fa-envelope"></i>
                                    <div>
                                        <span>Email</span>
                                        <span>support@gmail.com</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="fas fa-stopwatch"></i>
                                    <div>
                                        <span>Working hours</span>
                                        <span>24/7</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29464.755749105792!2d75.6680956498235!3d22.612947216938313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962564220635431%3A0x1ed4b3c611de0d32!2sPithampur%20Industrial%20Area%2C%20Pithampur%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1621262170552!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
