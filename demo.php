<?php
/* error_reporting(0);
session_start();
$_SESSION['timeout']=time();
$_SESSION['download_cv_SAU@94rabh_singh']='true_download';
$inactive = 10; 
$session_life = time() - $_SESSION['timeout'];
if($session_life > $inactive)
			{    session_destroy();
	           unset($_SESSION['download_cv_SAU@94rabh_singh']);  
    		 }
			$_SESSION['timeout']=time();

if($_SESSION['download_cv_SAU@94rabh_singh']=='true_download')
{
 */
$filename = 'cv_saurabh/SAURABH_KUMAR.pdf'; // of course find the exact filename....        
header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private', false); // required for certain browsers 
header('Content-Type: application/pdf');

header('Content-Disposition: attachment; filename="'. basename($filename) . '";');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($filename));
ob_clean();
flush();
readfile($filename);
			
/* }
else
{   
	echo "<center><h1>Download link is expired.</h1></center>";
	
} */

?>