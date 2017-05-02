<?php

include("conn.php");

$fname = mysqli_real_escape_string($con, $_POST['first_name']);
$mob = mysqli_real_escape_string($con, $_POST['mob']);
$em = mysqli_real_escape_string($con, $_POST['email']);
$sex = mysqli_real_escape_string($con, $_POST['sex']);
$msg = mysqli_real_escape_string($con, $_POST['message']);
$curr_time = date("j M Y h:i:s A", time());

$sql = "INSERT INTO user_info(Name,Mobile,Email,Sex,Message,Time) VALUES ('$fname','$mob','$em','$sex','$msg','$curr_time')";

if (mysqli_query($con, $sql)) {
    echo "Your request has been successfully saved.";
} else {
    echo "PLease try again later.";
}
?>