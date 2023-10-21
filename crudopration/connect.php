<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bolly";
$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
   // echo "connection was successfully";
   die(mysqli_error($conn));
}


?>