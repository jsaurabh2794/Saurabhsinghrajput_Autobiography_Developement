<?php
$server="localhost";
$uname="root";
$upass="";
$dname="contact";
$con=mysqli_connect($server,$uname,$upass,$dname);
if($con==false)
{
die("Error:could not connect".mysqli_connect_error());	
}

?>