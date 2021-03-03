<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

//check connection
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
echo "connected successfully";
?>