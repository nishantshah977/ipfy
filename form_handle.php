<?php
$connection = mysqli_connect("localhost", "root", "admin", "ipfy");
if (!$connection) {
    echo "Connection to database failed";
}

$url = mysqli_real_escape_string($connection, $_POST['url']);

if (strpos($url,"http://") !== false || strpos($url,"https://") !== false ){
    $url = "http://".$url;
}

$tracking_code = mysqli_real_escape_string($connection, $_POST['tracking_code']);

// INSERT into url record
$query = "INSERT INTO ipfy_url (tracking_code,url) VALUES ('$tracking_code','$url')";
$insert = mysqli_query($connection, $query);

// Create Table to store IP and User Agent
$create_tbl_query = "CREATE TABLE `$tracking_code` (ip TEXT, user_agent TEXT)";
mysqli_query($connection, $create_tbl_query);

mysqli_close($connection);
?>
