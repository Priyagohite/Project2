<?php
session_start();
 $check=$_SESSION['check'];
if(isset($_POST['charge'])){
	$_SESSION['charge']=$_POST['charge'];
}

 $_SESSION['charge'];
 $_COOKIE['username'];
 $_COOKIE['password'];
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
  if($check==1){
      $_SESSION['vehicle_image']=$_POST['vehicle_image'];
      $_SESSION['vehicle']=$_POST['vehicle'];
      header('location: ../bill.php');
  }
  if($check==2){
      header('location: ../cust.php');
  }
}else{
      header('location: ../login.php');
}
?>