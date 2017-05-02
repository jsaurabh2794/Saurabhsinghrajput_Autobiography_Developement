<?php

include("conn.php");

$em=mysqli_real_escape_string($con,$_POST['email1']);
$token=  md5(base64_encode(json_encode($em.date("j,l,h:i:s A"))));
$end_time=  time()+1800;
$exp_time=date("j M Y h:i:s",$end_time);
$sql="INSERT INTO user_info1(Email_id_of_user,token,expires) VALUES ('$em','$token','$exp_time')";


if(mysqli_query($con, $sql)){
//session_start();
//$_SESSION['timeout']=time();
//$_SESSION['download_cv_SAU@94rabh_singh']='true_download';
send_mail($em,$token);
echo "Thank You! Check your inbox to get a  download link.";

} else{
   echo "There is problem.please try again later.";
}


function send_mail($em,$token)
{
$to="contact@saurabhsinghrajput.xyz";
$subject="CV Download Request";
$message="Hello Dear."."\n\n"."Thank you for showing the interest."."\n"."Link is given below to download my cv:"."\n\n"."http://saurabhsinghrajput.xyz/cv?token=$token"
        . "\n\n"."Note:This link will remain active within 30 minutes."."\n\n"."Thanks & Regards.";
$headers ="From:" ." "."Saurabh Singh Rajput". "<".$to.">";
mail($em, $subject, $message,$headers);
}

?>
