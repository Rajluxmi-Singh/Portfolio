<?php
$servername="localhost";
$username="root";
$password="";
$database="portfolio";

$con = mysqli_connect($servername,$username, $password, $database);
if(!$con)
{
	die("error detected".mysqli_error($con));	
}
else
	{
	echo 'successfully done';
	}


?>
