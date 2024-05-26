<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sname = $_GET["sname"];
$email = $_GET["email"];
$phone = $_GET["phone"];
$msg = $_GET["msg"];

$sql = "INSERT INTO contact (sname, email, phone, msg) VALUES ('$sname', '$email', '$phone', '$msg')";

if (mysqli_query($conn, $sql)) {
 echo "msg sent";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>