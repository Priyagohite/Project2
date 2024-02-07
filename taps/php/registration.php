<?php
 session_start();
include 'dbconnect.php';
if(!$con){
echo"not connected";
}
$name = $_SESSION['name'];
 $phone=  $_SESSION['phone'];
 $email= $_SESSION['email'];
  $invite_code = $_SESSION['invite'];
 $pass= $_SESSION['pass'];
 $current_balance=30;
$friend_invite_code = random_int(0, 9999999);
$s= "SELECT * FROM `userdata` WHERE email='$email'";
$result=mysqli_query($con,$s);
if(mysqli_num_rows($result)==1){
 echo"User name already taken";
}else{
 $frndid = $_SESSION['email'];
 $invite_code = $_SESSION['invite'];
 $from_userdata = "SELECT * FROM userdata WHERE invitation='$invite_code'";
 $res = mysqli_query($con,$from_userdata);
 $num_rows = mysqli_num_rows($res);
 if ($num_rows==1) {
 	while($row = mysqli_fetch_array($res)){ 
 	$self_id = $row['email'];
    $self_invite = $row['invitation']; 
 }
 $level_one = "INSERT INTO `team`(`friend_id`, `self_id`, `friend_invite_code`, `self_invite_code`,`income`) VALUES ('$frndid','$self_id','$friend_invite_code','$self_invite',150)";
 $check_lvl_1=mysqli_query($con,$level_one);
 if (!$check_lvl_1) {
 	echo "string";
 	 }
 }

if ($num_rows==1) {
 $sqt="INSERT INTO `userdata`(`name`,`phone_no`, `email`, `invitation`, `password`, `promotion_income`, `level_one_income`, `level`) VALUES ('$name','$phone','$email','$friend_invite_code','$pass',150,'','')";
$check=mysqli_query($con,$sqt);
 setcookie('email',$email,time()+60*60*24*30);
 setcookie('pass',$pass,time()+60*60*24*30);
$_SESSION['email']=$email;
if (!$check) {
	echo "something went wrong 1";
}else{
	header("location: ../index.php");
}

}else{
	 $sqt="INSERT INTO `userdata`(`name`, `phone_no`, `email`, `invitation`, `password`, `promotion_income`, `level_one_income`, `level`) VALUES ('$name','$phone','$email','$friend_invite_code','$pass',0,'','')";
$check=mysqli_query($con,$sqt);
 setcookie('email',$email,time()+60*60*24*30);
 setcookie('pass',$pass,time()+60*60*24*30);
 $_SESSION['email']=$email;
if (!$check) {
	echo "something went wrong 2";
}else{
	header("location: ../index.php");
  }
 }
}
?>