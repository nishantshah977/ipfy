<?php

$ip = mysqli_real_escape_string($_SERVER['REMOTE_ADDR']);
$user_agent = mysqli_real_escape_string($_SERVER['HTTP_USER_AGENT']);

$connection = mysqli_connect("localhost", "root", "admin", "ipfy");
if (!$connection) {
    echo "Connection to database failed";
}
$code = $_GET['code'];

$query = "SELECT url from ipfy_url WHERE tracking_code = '$code'";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
echo "<script>window.location = '".$row['url']."';</script>";

$update_to_db = "INSERT INTO $code (ip,user_agent) VALUES('$ip','$user_agent')";

if(mysqli_query($connection,$update_to_db)){
    echo "Success";
}
else{
    echo "Fail";
}
?>
