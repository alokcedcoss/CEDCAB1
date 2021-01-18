
<?php
session_start();

 $mobile = $_POST['otp'];
 $randn = rand(100000,999999);
 $_SESSION["OTP1"] = $randn;
$field = array(
    "sender_id" => "FSTSMS",
    "language" => "english",
    "route" => "qt",
    "numbers" => "$mobile",
    "message" => "42840",
    "variables" => "{#BB#}",
    "variables_values" => "$randn"
);
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($field),
  CURLOPT_HTTPHEADER => array(
    "authorization:EJqyhYOug3VobTpwi6Bst1UHKm9fecDN02Lavld4Z7MFrXGCkW2TPm6GZBA8HYQSeu9tsVlJ0fWRphDr",
    "cache-control: no-cache",
    "accept: */*",
    "content-type: application/json"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo "please check your registerd Mobile No.and enter OTP";
}

?>