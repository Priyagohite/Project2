<?php
include 'php/dbconnect.php';
session_start();
$_SESSION['check']=2;
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){ 
    $email = $_COOKIE['username'];
    $sql = "SELECT * FROM userdata WHERE email = '$email'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)){
        $taps_money=$row['promotion_income'];
        $invitation=$row['invitation'];
        $name = $row['name'];
        $phone = $row['phone_no'];
    }

?>
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
    <link rel="stylesheet" href="cust.css">

    <title>info</title>
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
                                <a class="nav-link font-light" href="vehicle.html">Vehicles</a>
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
                                <a class="nav-link font-light" href="organization.html">Organization</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-light" href="notification.php">Notification</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active font-light" href="cust.php">Cust info</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section>
        <div class="container p-4 shadow-lg">
            <div class="box-1">
                <div class="image">
                    <img src="./images/user.jfif" alt="">
                </div>
                <div class="info">
                    <h5><?php echo $name; ?></h5>
                </div>
            </div>
            <div class="box-2">
                <h6><i class="fas fa-street-view"></i>Taps</h6>
                <h6><i class="fas fa-home"></i>Address</h6>
                <h6><i class="fas fa-envelope"></i><?php echo $email; ?></h6>
                <h6><i class="fas fa-phone-alt"></i><?php echo $phone; ?></h6>
            </div>
        </div>
    </section>

    <!-- <footer>
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
    </footer> -->

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
<?php
}else{
    header('location: login.php');
}
?>