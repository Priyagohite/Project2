<?php 
session_start();
$amount= $_SESSION['amount'];
$name= $_SESSION['name'];
$email= $_SESSION['email'];
$_SESSION['vehicle_image'];
$_SESSION['vehicle'];
$_SESSION['from'];
$_SESSION['to'];
$_SESSION['stay_time'];

// $db = new Database();
// $db->select('options','site_name',null,null,null,null);
// $site_name = $db->getResult();


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_d883b3a8d2bc1adc7a535506713",
                  "X-Auth-Token:test_dc229039d2232a260a2df3f7502"));
    // $API_KEY = "12079f040e2058dc523c616b763fa28d";
    // $AUTH_TOKEN = "f191813a4e3e55f121b0e465de84d8d8";
    // $URL = "https://www.instamojo.com/api/1.1/";
     /*$API_KEY = "test_d883b3a8d2bc1adc7a535506713";
    $AUTH_TOKEN = "test_dc229039d2232a260a2df3f7502";
    $URL = "https://test.instamojo.com/api/1.1/"; */
$payload = Array(
    'purpose' => 'TAXI Booking',
    'amount' => $amount,
     'phone' => $_SESSION['phone'],
    'buyer_name' => $name,
    'redirect_url' => 'https://thetaps.in/phpmail.php',
     'send_email' => true,
    // 'webhook' => 'http://www.example.com/webhook/',
     // 'send_sms' => true,
     'email' => $email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch);
$response = json_decode($response); 
 //echo '<pre>';
 //print_r($response);
//exit;
$_SESSION['TID'] = $response->payment_request->id;
// $params1 = [
//     'item_number' => $_POST['product_id'],
//     'txn_id' => $response->payment_request->id,
//     'payment_gross' => $_POST['product_total'],
//     'payment_status' => 'credit',
// ];
// $params2 = [
//     'product_id' => $_POST['product_id'],
//     'product_qty' => $_POST['product_qty'],
//     'total_amount' => $_POST['product_total'],
//     'product_user' => $_SESSION['user_id'],
//     'order_date' => date('Y-m-d'),
//     'pay_req_id' => $response->payment_request->id
// ];
// $db = new Database();
// $db->insert('payments',$params1);
// $db->insert('order_products',$params2);
// $db->getResult();

header('Location: '.$response->payment_request->longurl);
?>