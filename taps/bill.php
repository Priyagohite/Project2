<?php
session_start();
include 'php/dbconnect.php';
 $username = $_COOKIE['username'];
        $sql = "SELECT * FROM `userdata` WHERE `email` = '$username'";
      $result = mysqli_query($con,$sql); 
while($row = mysqli_fetch_array($result)){
   $name =  $row['name'];
    $email =  $row['email'];
    $phone =  $row['phone_no'];
    $taps_money = $row['promotion_income'];
    // $message = $row['Message'];
 }
 $_SESSION['name']=$name;
 $_SESSION['email']=$email;
 $_SESSION['phone']=$phone;
 $_SESSION['stay_time'];
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
    <link rel="stylesheet" href="bill.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
          <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
 <style type="text/css">
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
        display: none;
    }
    </style>
    <title></title>
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 box-1">
                    <div class="container container-1 shadow-lg">
                        <div class="image">
                            <img src="<?php echo $_SESSION['vehicle_image'];?>.jpg" alt="">
                            <h5><?php echo $_SESSION['vehicle']; ?></h5>
                            <!--<p>(5 Seater)</p>-->
                        </div>
                        <div class="timing destination">
                            <div class="t-1">
                                <p>From</p>
                                <h5><?php echo $_SESSION['from'] ?></h5>
                            </div>
                            <span class="span"><i class="fas fa-exchange-alt"></i></span>
                            <div class="t-1">
                                <p>To</p>
                                <h5><?php echo $_SESSION['to'] ?></h5>
                            </div>
                        </div>
                        <!--<div class="timing">-->
                        <!--    <div class="t-1">-->
                        <!--        <h5>08:00 AM</h5>-->
                        <!--        <p>21 May 19, Tue</p>-->
                        <!--    </div>-->
                        <!--    <span class="span">To</span>-->
                        <!--    <div class="t-1">-->
                        <!--        <h5>08:00 AM</h5>-->
                        <!--        <p>22 May 19, Tue</p>-->
                        <!--    </div>-->
                        <!--</div>-->
                       
                        <div class="user-info">
                            <div class="container user">
                                <h5>UserName</h5>
                                <p id="name"><?php echo $name; ?></p>
                            </div>
                            <div class="container user">
                                <h5>EmailAddress</h5>
                                <p id="email"><?php echo $email; ?></p>
                            </div>
                            <div class="container user">
                                <h5>Mobile Number</h5>
                                <p id="phone"><?php echo $phone; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 box-2">
                    <div class="container container-2 shadow-lg">
                        <div class="invoice">
                            <!--<form action="instamojo.php" method="POST">-->
                            <h6>Invoice</h6>
                            <div class="invoice-gst">
                                <p style="font-weight: 500;">GST Number</p>
                                <p style="font-size: .9rem;">TAPS4XRT435</p>
                            </div>
                            <div class="invoice-data">
                                <h5>Original Tariff</h5>
                                <p><?php echo $_SESSION['charge'] ?></p>
                            </div>
                            <div class="invoice-data">
                                <h5>Discount</h5>
                                <p>-Rs 50</p>
                            </div>
                            <div class="invoice-data">
                                <h5>GST</h5>
                                <p>+Rs 10</p>
                            </div>
                            <div class="invoice-data">
                                <h5 class="text-success">Taps Money</h5>
                                <?php
                                $usable_money = ($taps_money/10);
                                
                                ?>
                                <p class="text-success">-Rs <?php echo $usable_money; ?></p>
                            </div>
                            <div class="invoice-data">
                                <h5>Total Payable Amount</h5>
                                <?php $amt=($_SESSION['amount']=$_SESSION['charge']-($usable_money+40)); ?>
                                <p id="amt" name="amt"><?php echo $amt ?></p>
                            </div>
                            <div class="button">
                                <button class="btn" onclick="pay_now()">CHECKOUT</button>
                            </div>
                          <!--</form>-->
                        </div>
                        <div class="media">
                            <img src="./images/credit_card.png" alt="">
                            <img src="./images/Credit-Card-Icons2-removebg-preview.png" alt="">
                            <img src="./images/google-pay-icon-update.png" alt="">
                            <img src="./images/phone-pe.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
    function pay_now(){
        var name="TAPS";
        // var amt=jQuery('#amt').val();
        var amt = document.getElementById('amt').innerHTML;
        var email= document.getElementById('email').innerHTML;
        var phone = document.getElementById('phone').innerHTML;
        // document.write(amt);
         // jQuery.ajax({
         //       type:'post',
         //       url:'payment_process.php',
         //       data:"amt="+amt+"&name="+name,
         //       success:function(result){
                   var options = {
                        "key": "rzp_test_VM38g4xdQZMia2", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "TAPS",
                        "email": email,
                        "description": "Transport and Passenger Service",
                        "image": "https://thetaps.in/images/as.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'phpmail.php',
                               data:"payment_id="+response.razorpay_payment_id+"&amt="+amt+"&name="+name,
                               success:function(result){
                                   window.location.href="success.html";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
           //     }
           // });
        
        
    }
</script>
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