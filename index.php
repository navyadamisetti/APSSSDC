<?php
session_start();
$user = 'root';
$pass = '';
$db = 'mysql';
$port = '80';
$conn = mysql_connect('localhost', 'root', '', 'stuclub');

if($conn->connect_error){
    die("connection failed". $conn->connect_error);
}
else 
echo"it's working";
?>
