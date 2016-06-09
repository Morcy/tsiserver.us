<?php
 
 if(isset($_POST['about']) && (strlen($_POST['about']) < 1000))
 {
      $con=mysqli_connect("us-cdbr-azure-central-a.cloudapp.net","bac0b14d8b49ce","1261d3b9","TSISERVER");
		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$about = $_POST['about'];
		mysqli_query($con,"UPDATE `accounts` SET `AboutMe` = '".$about ."' WHERE `gamertag` = '".$_COOKIE['user_id']."'");


		mysqli_close($con);
		
		header("Location: account?id=".$_COOKIE['user_id']);
		exit();
  
} else {
	header("Location: account?id=".$_COOKIE['user_id']);
	exit();
}



?>
