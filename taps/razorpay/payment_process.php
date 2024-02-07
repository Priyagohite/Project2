<?php
include('db.php');
if(isset($_POST['payment_id']) && isset($_POST['amt']) && isset($_POST['name'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_id = $_POST['payment_id'];
    $payment_status="Complete";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"insert into payment(name,amount,payment_status,payment_id,added_on) values('$name','$amt','$payment_status','$payment_id','$added_on')");
    $_SESSION['OID']=mysqli_insert_id($con);
}else{
	?>
     <script type="text/javascript">
     	alert("Oops! Something went wrong");
     	window.location.href="index.php";
     </script>
	<?php
}

// if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
//     $payment_id=$_POST['payment_id'];
//     $sql = "Insert into userdata(name, phone, email)"
//     mysqli_query($con,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
// }
?>