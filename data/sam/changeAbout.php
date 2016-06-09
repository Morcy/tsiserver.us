<?php
 
 if(isset($_POST['about']) && (strlen($_POST['about']) < 1000))
 {
      $con=mysqli_connect("localhost","SEN","M5ZJ5AGDmtN4spHu","PlayStation_Network00");
		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$about = $_POST['about'];
		mysqli_query($con,"UPDATE `Accounts` SET `AboutMe` = '".$about ."' WHERE `gamertag` = '".$_COOKIE['user_id']."'");


		mysqli_close($con);
		
		header("Location: account");
		exit();
  
} else {
	header("Location: account");
	exit();
}



?>