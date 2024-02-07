<?php
session_start();
include 'dbconnect.php';
if(isset($_SESSION['submit']))
{
function getLatLong($address){
if(!empty($address)){
//Formatted address
$formattedAddr = str_replace(' ','+',$address);
//Send request and receive json data by address
$geocodeFromAddr = file_get_contents
('https://api.opencagedata.com/geocode/v1/json?q=' . $formattedAddr . '&key=a0dd0fef96b542a1a712f6fdb7f09ce8');
$output = json_decode($geocodeFromAddr);
//Get latitude and longitute from json data

$data['latitude'] = $output->results[0]->geometry->lat;
$data['longitude'] = $output->results[0]->geometry->lng;

//Return latitude and longitude of the given address
if(!empty($data)){
return $data;
}
else
{
echo'error';
}
}
else
{
echo'error1';
}
}
$address = $_SESSION['address'];
$latLong = getLatLong($address);
$latitude = $latLong['latitude']?$latLong['latitude']:'Not found';
$longitude = $latLong['longitude']?$latLong['longitude']:'Not found';
}

if(isset($_SESSION['submit']))
{
function getLatLong_1($address1){
if(!empty($address1)){
//Formatted address
$formattedAddr = str_replace(' ','+',$address1);
//Send request and receive json data by address
$geocodeFromAddr = file_get_contents
('https://api.opencagedata.com/geocode/v1/json?q=' . $formattedAddr . '&key=a0dd0fef96b542a1a712f6fdb7f09ce8');
$output = json_decode($geocodeFromAddr);
//Get latitude and longitute from json data

$data['latitude'] = $output->results[0]->geometry->lat;
$data['longitude'] = $output->results[0]->geometry->lng;

//Return latitude and longitude of the given address
if(!empty($data)){ 
return $data;
}else{
echo'error';
}
}else{
echo'error1';
}
}
$address1 = $_SESSION['address1'];
$latLong1 = getLatLong_1($address1);
$latitude1 = $latLong1['latitude']?$latLong1['latitude']:'Not found';
$longitude1= $latLong1['longitude']?$latLong1['longitude']:'Not found';
}

$lat1 = $latitude;
$lon1 = $longitude;
$lat2 = $latitude1;
$lon2 = $longitude1;
// $theta = $lon1 - $lon2;
// $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
// $dist = acos($dist);
// $dist = rad2deg($dist);
// $miles = $dist * 60 * 1.1515;
//  $km=ceil($miles * 1.069344 * 2);
//Return actual Kilometers

function get_km($lat1,$lon1,$lat2,$lon2){
  $get_km_json = file_get_contents('https://router.hereapi.com/v8/routes?transportMode=car&origin='.$lat1.','.$lon1.'&destination='.$lat2.','.$lon2.'&return=summary&apikey=CpLXvz-wzXfNf4b51e6W9WxSU_EydWVydOJjkDiOV1o');
$output = json_decode($get_km_json);
//Get latitude and longitute from json data

$km = ($output->routes[0]->sections[0]->summary->length)/1000;
$time = ($output->routes[0]->sections[0]->summary->duration)/3600;
$km = round($km, 2);
if(!empty($km)){ 
return $km;
}else{
echo'error';
}

}

//Return time to travel

function get_time($lat1,$lon1,$lat2,$lon2){
  $get_km_json = file_get_contents('https://router.hereapi.com/v8/routes?transportMode=car&origin='.$lat1.','.$lon1.'&destination='.$lat2.','.$lon2.'&return=summary&apikey=CpLXvz-wzXfNf4b51e6W9WxSU_EydWVydOJjkDiOV1o');
$output = json_decode($get_km_json);
//Get latitude and longitute from json data

$time = ($output->routes[0]->sections[0]->summary->duration)/3600;
$time = round($time, 2);
if(!empty($time)){ 
return $time;
}else{
echo'error';
}

}

$km = get_km($lat1,$lon1,$lat2,$lon2);

$time = get_time($lat1,$lon1,$lat2,$lon2);
list($whole, $decimal) = explode('.', $time);
if($decimal>60){
  $decimal = $decimal-60;
}
$stay_time = 2;
$_SESSION['time_taken_in_hours']=$whole;
$_SESSION['time_taken_in_minutes']=$decimal;
$_SESSION['stay_time']= $stay_time;
$_SESSION['from']=$address;
$_SESSION['to']=$address1;
$_SESSION['km']=$km;

//calculate charge

if(0<$km && $km<=30)
       {
           $o=(2*$km*9)+80+($stay_time*2);
       }
       else if(30<$km && $km<=40)
       {
           $o=(2*$km*9)+70+($stay_time*2);
       }
       else if(40<$km && $km<=60)
       {
           $o=(2*$km*9)+90+($stay_time*2);
       }else if(60<$km && $km<=100)
       {
           $o=(2*$km*9)+150+($stay_time*2);
       }
       else if(100<$km && $km<=200)
       {
           $o=(2*$km*9)+185+($stay_time*2);
       }
       else if(200<$km && $km<=350)
       {
           $o=(2*$km*9)+210+($stay_time*2);
       }
       else if(350<$km && $km<=500)
       {
           $o=(2*$km*9)+250+($stay_time*2);
       }
       else if(500<$km && $km<=800)
       {
           $o=(2*$km*9)+300+($stay_time*2);
       }else if(800<$km && $km<=1000)
       {
           $o=(2*$km*9)+450+($stay_time*2);
       }
       else
       {
           $o=(2*$km*9)+500+($stay_time*2);
       }
      
    


        if(0<$km && $km<=30)
       {
           $o1=(2*$km*8.2)+80+($stay_time*2);
       }
       else if(30<$km && $km<=40)
       {
           $o1=(2*$km*8.2)+70+($stay_time*2);
       }
       else if(40<$km && $km<=60)
       {
           $o1=(2*$km*8.2)+90+($stay_time*2);
       }else if(60<$km && $km<=100)
       {
           $o1=(2*$km*8.2)+150+($stay_time*2);
       }
       else if(100<$km && $km<=200)
       {
           $o1=(2*$km*8.2)+185+($stay_time*2);
       }
       else if(200<$km && $km<=350)
       {
           $o1=(2*$km*8.2)+210+($stay_time*2);
       }
       else if(350<$km && $km<=500)
       {
           $o1=(2*$km*8.2)+250+($stay_time*2);
       }
       else if(500<$km && $km<=800)
       {
           $o1=(2*$km*8.2)+300+($stay_time*2);
       }else if(800<$km && $km<=1000)
       {
           $o1=(2*$km*8.2)+450+($stay_time*2);
       }
       else
       {
           $o1=($km*8.2)+500+($stay_time*2);
       }


        if(0<$km && $km<=30)
       {
           $o2=(2*$km*11)+80+($stay_time*2);
       }
       else if(30<$km && $km<=40)
       {
           $o2=(2*$km*11)+70+($stay_time*2);
       }
       else if(40<$km && $km<=60)
       {
           $o2=(2*$km*11)+90+($stay_time*2);
       }else if(60<$km && $km<=100)
       {
           $o2=(2*$km*11)+150+($stay_time*2);
       }
       else if(100<$km && $km<=200)
       {
           $o2=(2*$km*11)+185+($stay_time*2);
       }
       else if(200<$km && $km<=350)
       {
           $o2=(2*$km*11)+210+($stay_time*2);
       }
       else if(350<$km && $km<=500)
       {
           $o2=(2*$km*11)+250+($stay_time*2);
       }
       else if(500<$km && $km<=800)
       {
           $o2=(2*$km*11)+300+($stay_time*2);
       }else if(800<$km && $km<=1000)
       {
           $o2=(2*$km*11)+450+($stay_time*2);
       }
       else
       {
           $o2=(2*$km*11)+500;
       }


 if(0<$km && $km<=30)
       {
           $o3=(2*$km*13)+80+($stay_time*2);
       }
       else if(30<$km && $km<=40)
       {
           $o3=(2*$km*13)+70+($stay_time*2);
       }
       else if(40<$km && $km<=60)
       {
           $o3=(2*$km*13)+90+($stay_time*2);
       }else if(60<$km && $km<=100)
       {
           $o3=(2*$km*13)+150+($stay_time*2);
       }
       else if(100<$km && $km<=200)
       {
           $o3=(2*$km*13)+185+($stay_time*2);
       }
       else if(200<$km && $km<=350)
       {
           $o3=(2*$km*13)+210+($stay_time*2);
       }
       else if(350<$km && $km<=500)
       {
           $o3=(2*$km*13)+250+($stay_time*2);
       }
       else if(500<$km && $km<=800)
       {
           $o3=(2*$km*13)+300+($stay_time*2);
       }else if(800<$km && $km<=1000)
       {
           $o3=(2*$km*13)+450+($stay_time*2);
       }
       else
       {
           $o3=(2*$km*13)+500+($stay_time*2);
       }



       if(0<$km && $km<=30)
       {
           $o4=(2*$km*15)+80+($stay_time*2);
       }
       else if(30<$km && $km<=40)
       {
           $o4=(2*$km*15)+70+($stay_time*2);
       }
       else if(40<$km && $km<=60)
       {
           $o4=(2*$km*15)+90+($stay_time*2);
       }else if(60<$km && $km<=100)
       {
           $o4=(2*$km*15)+150+($stay_time*2);
       }
       else if(100<$km && $km<=200)
       {
           $o4=(2*$km*15)+185+($stay_time*2);
       }
       else if(200<$km && $km<=350)
       {
           $o4=(2*$km*15)+210+($stay_time*2);
       }
       else if(350<$km && $km<=500)
       {
           $o4=(2*$km*15)+250+($stay_time*2);
       }
       else if(500<$km && $km<=800)
       {
           $o4=(2*$km*15)+300+($stay_time*2);
       }else if(800<$km && $km<=1000)
       {
           $o4=(2*$km*15)+450+($stay_time*2);
       }
       else
       {
           $o4=(2*$km*15)+500+($stay_time*2);
       }
       

      $_SESSION['mini_car'] = $o;
        $_SESSION['micro_car'] = $o1;
        $_SESSION['muv'] = $o2;
        $_SESSION['prime5'] = $o3;
        $_SESSION['prime7'] = $o4;
        if(isset($_SESSION['mini_car']) && isset($_SESSION['micro_car']) && isset($_SESSION['muv']) && $_SESSION['prime5'] && $_SESSION['prime7']){
        	header("location: ../vehicle.php");
        }


// if(!$con){
// echo"not connected";
// }
// $sql="SELECT `user_id`, `name`, `email`, `password`, `phone_no` FROM `userdata` WHERE user_id= '$id'";
// $result = mysqli_query($con, $sql);
// if(mysqli_num_rows($result)>0){
// while($row=mysqli_fetch_assoc($result))
// {
// $_SESSION['name']=$row['name'];
// $_SESSION['phone']=$row['phone_no'];
// $_SESSION['email']=$row['email'];
// }
// }else{
//  echo"error";
// }
// $_SESSION['u_id']=$id;
// if(!empty($_SESSION['phone'])){
//     header("location:billing_page.php");
//     }
?>