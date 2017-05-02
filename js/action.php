<?php
session_start();
include("conn.php");
$msg="";
$to ="contact@saurabhsinghrajput.com";
$toi ="jsaurabh2794@gmail.com";
$fname=mysqli_real_escape_string($con,$_POST['first_name']);
$mob=mysqli_real_escape_string($con,$_POST['mob']);
$em=mysqli_real_escape_string($con,$_POST['email']);
$sex=mysqli_real_escape_string($con,$_POST['sex']);
$msg=mysqli_real_escape_string($con,$_POST['message']);

$subject="Form Submission";
$subject1="Copy of Your Form Submission";
$message="Hi"." ".$fname ."\n\n". "You wanted to contact me for the following reason:" . "\n" .$msg."\n\n "."I will contact you in near future."."\n"."Thanks"."\n\n"."Note: This email address cannot accept replies. so please do not reply.";
$message1="Copy of your message"."\n\n".$fname . " " . "Wrote the following" . "\n" .$msg."\n "."Mobile number:".$mob;
$head ="From:" ." ". $to;
$head1 ="From:" . $to;
$sql="INSERT INTO user_info(Name,Mobile,Email,Sex,Message) VALUES ('$fname','$mob','$em','$sex','$msg')";

if(mysqli_query($con, $sql)){
  /*  mail($em,$subject,$message,$head);
     mail($toi,$subject1,$message1,$head1);*/
	//echo '<script type="text/javascript">alert("Your request has been successfully saved");window.location.replace("index.php")</script>';
         echo "Your request has been successfully saved";
} else{
   echo '<script type="text/javascript">alert("Something Error, Please try after some times.");window.location.replace("studentinfo.php")</script>';
}

 
?>