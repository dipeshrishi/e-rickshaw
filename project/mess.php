<?php
session_start();
$no=$_SESSION['rcno'];//data from queue
$rishi= $_SESSION['varname'];// data from dij
$message=$rishi;
echo $message;
if(isset($no) && isset($message))
{
  $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://192.168.43.1:18080/?phone=$no&message=$message");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
curl_exec($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Returns 200 if everything went well
if($statusCode==200)
{
  header("Location: http://localhost/project/thank.php");
}


curl_close($ch);




}
 ?>
