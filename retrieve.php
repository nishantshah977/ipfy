<?php
 $connection = mysqli_connect("localhost", "root", "admin", "ipfy");
if (!$connection) {
    echo "Connection to database failed";
}

$tracking_code = $_GET['code'];

$query = "SELECT * FROM $tracking_code";
$result = mysqli_query($connection,$query);

$row = mysqli_fetch_assoc($result);

while($row){
echo $row['ip'] ."<br>". $row['user_agent'];
}

mysqli_close($connection);
?>
