<?php 
 
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "mananwa45";
$dbname = "healthy_school";

$connect = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
 
if($connect->connect_error) {
    die("Connection Failed : " . $connect->error);
}
 
?>