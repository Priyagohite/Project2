<?php
session_start();
$_SESSION['km'];
$_SESSION['stay_time'];
$_SESSION['from'];
$_SESSION['to'];
$_SESSION['check']=1;
$_SESSION['mini_car'];
$_SESSION['micro_car'];
$_SESSION['muv'];
$_SESSION['prime5'];
$_SESSION['prime7'];
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vehicle.css">

    <title></title>
</head>

<body>

    <header class="hero">
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
                                <a class="nav-link active font-light" href="vehicle.php">Vehicles</a>
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
                            <li class="nav-item">
                                <a class="nav-link font-light" href="cust.php">Cust info</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section class="mt-5">
        <div class="container-fluid">
            <div class="row slider">
                <div class="col-3">
                    <div class="image p-2">
                        <img src="./images/card-image-11.jfif" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="image p-2">
                        <img src="./images/card-image-17.jfif" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="image p-2">
                        <img src="./images/card-image-18.jfif" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="image p-2">
                        <img src="./images/card-image-19.jfif" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="image p-2">
                        <img src="./images/card-image-15.jfif" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="image p-2">
                        <img src="./images/card-image-16.jfif" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="image p-2">
                        <img src="./images/card-image-12.jfif" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="image p-2">
                        <img src="./images/card-image-13.jfif" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="image p-2">
                        <img src="./images/card-image-14.jfif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <header>
        <div class="container ">
            <div class="row">
                <div class="col-2">
                    <div class="card p-3 shadow-lg">
                        <div class="card-image">
                            <img src="./images/micro.jpg" alt="">
                        </div>
                        <form action="php/check_signin.php" method="POST">
                        <div class="card-body text-center">
                            <h4>MICRO CAR</h4>
                            <p>Alto/K10/Eon</p>
                            <div class="info">
                                <div class="info-child-1">
                                    <h5>Seater</h5>
                                    <p>4</p>
                                </div>
                                <div class="info-child-2">
                                    <h5>Charge</h5>
                                    <p class="text-success"><?php echo $_SESSION['micro_car'] ?> <i class="fa fa-rupee"></i></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <!-- Button trigger modal -->
                                <input type="hidden" value="MICRO CAR" name="vehicle"> 
                                <input type="hidden" value="./images/micro" name="vehicle_image"> 
                                <input type="hidden" name="charge" value="<?php echo $_SESSION['micro_car'] ?>">
                                <button type="submit" class="btn btn-sec" data-bs-toggle="modal">Book Now
                                </button>
                            </div>                        
                        </div>
                        </form>
                    </div>
                </div>
                    <div class="col-2">
                    <div class="caard p-3 shadow-lg">
                        <div class="card-image">
                            <img src="./images/minicar.jpg" alt="">
                        </div>
                         <form action="php/check_signin.php" method="POST">
                        <div class="card-body text-center">
                            <h4>MINI CAR</h4>
                            <p>Swift/i-10/Tiago</p>
                            <div class="info">
                                <div class="info-child-1">
                                    <h5>Seater</h5>
                                    <p>5</p>
                                </div>
                                <div class="info-child-2">
                                     <h5>Charge</h5>
                                    <p class="text-success"><?php echo $_SESSION['mini_car'] ?> <i class="fa fa-rupee"></i></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <!-- Button trigger modal -->
                                 <input type="hidden" value="MINI CAR" name="vehicle"> 
                                <input type="hidden" value="./images/minicar" name="vehicle_image"> 
                                <input type="hidden" name="charge" value="<?php echo $_SESSION['mini_car'] ?>">
                                <button type="submit" class="btn btn-sec" data-bs-toggle="modal">Book Now
                                </button>

                                <!-- Modal -->
                                
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
             <div class="col-2">
                    <div class="card p-3 shadow-lg">
                        <div class="card-image">
                            <img src="./images/muv.jpg" alt="">
                        </div>
                         <form action="php/check_signin.php" method="POST">
                        <div class="card-body text-center">
                            <h4>MUV</h4>
                            <p>Tavera/Ertiga/Eeco</p>
                            <div class="info">
                                <div class="info-child-1">
                                    <h5>Seater</h5>
                                    <p>7</p>
                                </div>
                                <div class="info-child-2">
                                     <h5>Charge</h5>
                                    <p class="text-success"><?php echo $_SESSION['muv'] ?>  <i class="fa fa-rupee"></i></p>
                                </div>
                            </div>
                             <div class="d-flex justify-content-center">
                                <!-- Button trigger modal -->
                                 <input type="hidden" value="MUV" name="vehicle"> 
                                <input type="hidden" value="./images/muv" name="vehicle_image"> 
                                <input type="hidden" name="charge" value="<?php echo $_SESSION['muv'] ?>">
                                <button type="submit" class="btn btn-sec" data-bs-toggle="modal">Book Now
                                </button>

                               
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                 <div class="col-2">
                    <div class="card p-3 shadow-lg">
                        <div class="card-image" style="transform: scaleX(-1);">
                            <img src="./images/suv.jpg" alt="">
                        </div>
                         <form action="php/check_signin.php" method="POST">
                        <div class="card-body text-center">
                            <h4>PREMIUM SEDAN</h4>
                            <p>Verna/Ciaz/Honda city</p>
                            <div class="info">
                                <div class="info-child-1">
                                    <h5>Seater</h5>
                                        <p>5</p>
                                </div>
                                <div class="info-child-2">
                                     <h5>Charge</h5>
                                    <p class="text-success"><?php echo $_SESSION['prime5'] ?> <i class="fa fa-rupee"></i></p>
                                </div>
                            </div>
                             <div class="d-flex justify-content-center">
                                <!-- Button trigger modal -->
                                 <input type="hidden" value="PREMIUM SEDAN" name="vehicle"> 
                                <input type="hidden" value="./images/suv" name="vehicle_image"> 
                                <input type="hidden" name="charge" value="<?php echo $_SESSION['prime5'] ?>">
                                <button type="submit" class="btn btn-sec" data-bs-toggle="modal">Book Now
                                </button>

                               
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            
                <div class="col-2">
                    <div class="card p-3 shadow-lg">
                        <div class="card-image" style="transform: scaleX(-1);">
                            <img src="./images/sedan.jpg" alt="">
                        </div>
                         <form action="php/check_signin.php" method="POST">
                        <div class="card-body text-center">
                            <h4>PREMIUM SUV</h4>
                            <p>Scorpio/XUV 500/TUV</p>
                            <div class="info">
                                <div class="info-child-1">
                                    <h5>Seater</h5>
                                    <p>7</p>
                                </div>
                                <div class="info-child-2">
                                    <h5>Charge</h5>
                                    <p class="text-success"><?php echo $_SESSION['prime7'] ?> <i class="fa fa-rupee"></i></p>
                                </div>
                            </div>
                             <div class="d-flex justify-content-center">
                                <!-- Button trigger modal -->
                                 <input type="hidden" value="PERMIUM SUV" name="vehicle"> 
                                <input type="hidden" value="./images/sedan" name="vehicle_image">
                                <input type="hidden" name="charge" value="<?php echo $_SESSION['prime7'] ?>">
                                <button type="submit" class="btn btn-sec" data-bs-toggle="modal">Book Now
                                </button>

                               
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
               
                
                   <div class="col-2">
                    <div class="card p-3 shadow-lg">
                        <div class="card-image">
                            <img src="./images/mini.jpg" alt="">
                        </div>
                         <form action="php/check_signin.php" method="POST">
                        <div class="card-body text-center">
                            <h4>MINI BUS</h4>
                            <p>It is suitable for maximum 16 people.</p>
                            <div class="info">
                                <div class="info-child-1">
                                    <h5>Seater</h5>
                                    <p>16</p>
                                </div>
                                <div class="info-child-2">
                                    <h5>Charge</h5>
                                    <p class="text-success"></p>
                                </div>
                            </div>
                             <div class="d-flex justify-content-center">
                                <!-- Button trigger modal -->
                                 <input type="hidden" value="MINI BUS" name="vehicle"> 
                                <input type="hidden" value="./images/mini" name="vehicle_image"> 
                                <button type="submit" class="btn btn-sec">Book Now
                                </button>

                
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script>
        $('.slider').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 4,
            slidesToScroll: 4,
            prevArrow: false,
            nextArrow: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        fade: true,
                        cssEase: 'linear'
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>