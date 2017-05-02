<?php

include 'conn.php'; //This connection is different for web servers.
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $check_token_reslt = mysqli_query($con, "SELECT * from user_info1 where token='$token'");
    $sql = "SELECT * from user_info1 where token='$token' and download='0'";
    $rslt = mysqli_query($con, $sql);
    $curr_time = date("j M Y h:i:s A", time());
    if (mysqli_num_rows($check_token_reslt) >= 1) {
        while ($row = mysqli_fetch_row($check_token_reslt)) {
            $exp_time = $row[3];
        }
        if (strtotime($curr_time) < strtotime($exp_time)) {
            file_download($con, $token);
        } else {
            echo '<center><h1 style="color:red">Sorry! Your Token is expired.</h1><br><h2>Go to<a href="http://saurabhsinghrajput.xyz"> Home</a> Page to make a download request, again.</h2></center>';
        }
    } else {
        echo '<center><h1 style="color:red">Sorry! Your Token is invalid.</h1><br><h2>Go to<a href="http://saurabhsinghrajput.xyz"> Home</a> Page to make a download request, again.</h2></center>';
    }
}
 else {
    echo '<center><h1 style="color:red">SORRY! URL is invalid</h1><br><h2>Go to<a href="http://saurabhsinghrajput.xyz"> Home</a> Page.</h2></center>';

}

function file_download($con, $token) {
    $filename = 'resources/cv_saurabh/SAURABH KUMAR.pdf'; // of course find the exact filename....        
    header('Pragma: public');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Cache-Control: private', false); // required for certain browsers 
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . basename($filename) . '";');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length:' . filesize($filename));
    ob_clean();
    flush();
    readfile($filename);
    mysqli_query($con, "UPDATE user_info1 set download='1' where token='$token'");
}

?>
