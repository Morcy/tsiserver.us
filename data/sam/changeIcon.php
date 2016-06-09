<?php

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")) && in_array($extension, $allowedExts) && ($_FILES['file']['size'] < 100000)) 
{
  if ($_FILES["file"]["error"] > 0) {
    header("Location: account?badFile=1");
	exit();
  } else {
  
	if($_COOKIE['user_id'] == "FatalTech")
	{
		echo "<script>alert('You are banned from uploading images!');window.location.replace('http://tsiserver.us/');</script>";
		exit();
	}
	
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
	$length = 9;
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
	$uploaddir = '/var/www/html/user/'.$_COOKIE['user_id'].".".$randomString .".";
	$uploadfile = $uploaddir . basename($_FILES['file']['name']);
	$newLink = 'http://tsiserver.us/user/'.$_COOKIE['user_id'].".".$randomString .".".basename($_FILES['file']['name']);
    move_uploaded_file($_FILES["file"]["tmp_name"], $uploadfile);
	 
      $con=mysqli_connect("localhost","SEN","M5ZJ5AGDmtN4spHu","PlayStation_Network00");
		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		mysqli_query($con,"UPDATE `Accounts` SET `icon` = '".$newLink ."' WHERE `gamertag` = '".$_COOKIE['user_id']."'");


		mysqli_close($con);
		
		header("Location: account");
		exit();
  }
} else {
	header("Location: account?badFile=1");
	exit();
}



?>