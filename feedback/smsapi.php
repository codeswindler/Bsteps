<?php

if(!isset($_POST['name'])){
  echo "<script> location.href='text_input.php'; </script>";
  exit;
}

$user = $_POST['name'];
$phonenumber = $_POST['phone_number'];
$message = $_POST['message'];

//comment

$apikey = "fc8a68bbaab3d310997803e4786537cb";
$partnerId = 5194;
$mobile = $phonenumber;
$message = $message;
$shortcode = 'JuaMobile';
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://quicksms.advantasms.com/api/services/sendsms/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
	"apikey":"'.$apikey.'",
	"partnerID":"'.$partnerId.'",
	"mobile":"'.$mobile.'",
	"message":"'.$message.'",
	"shortcode":"'.$shortcode.'",
	"pass_type":"plain"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Cookie: PHPSESSID=jor86gmuahj6ucrbdl7mdb8aln'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

if ($response) {
  echo "Hello! ".$user." we have sent you a message, check your phone to proceed.";
}
?>