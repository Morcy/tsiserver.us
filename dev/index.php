<?php session_start(); ?>
<?php
/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *
 */
include "app/config.php";
include "app/detect.php";

if(isset($_GET['uniqueID']))
{
	//AUTHORIZE DATA ENTRY- MEMBER ONLY ACCESS OR 404 REDIRECT W/ 24-HOUR BAN
	$_SESSION['authID'] = $_GET['uniqueID'];
	header("Location: index.tsi");
	exit();
}
if(!isset($_SESSION['authID']))
{

	include 'auth0.html';

	
}else{
	if ($page_name=='') {
		include $browser_t.'/index.php';
		}
	elseif ($page_name=='index.tsi') {
		include $browser_t.'/index.php';
		}
	elseif ($page_name=='contact-post.tsi') {
		include 'app/contact.php';
		}
	elseif ($page_name=='file.tsi') {
		include 'dev/dx.php';
		}
	else
		{
			include $browser_t.'/404.html';
		}
}
?>
