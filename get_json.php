<?php
$credentials = base64_encode("sample_api:GVBjPMm9s8qf8CZd");
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://dev.driveitag.com/user/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: application/json",
    "Content-Type: application/json",
    "Authorization: Basic $credentials"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
header('Content-Type: application/json');
echo $response;
exit();
?>

