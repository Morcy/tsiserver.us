<?php 
 $con=mysqli_connect("us-cdbr-azure-central-a.cloudapp.net","bac0b14d8b49ce","1261d3b9","TSISERVER");
			if (mysqli_connect_errno()) {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$result = mysqli_query($con,"SELECT * FROM `accounts` WHERE `gamertag` = '".$_COOKIE['user_id']."'");
			
			while($row = mysqli_fetch_array($result)) {
			   $icon = $row['icon'];
				$about = $row['AboutMe'];
			}
			
mysqli_close($con);
			
 if(isset($_POST['message']) && (strlen($_POST['message']) < 1000))
 {
      $con=mysqli_connect("us-cdbr-azure-central-a.cloudapp.net","bac0b14d8b49ce","1261d3b9","TSISERVER");
		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		$msg= addslashes($_POST['message']);
		$msg= strip_tags($msg, '<p><a><strong><img><br>');
		$msg= nl2br($msg);
		mysqli_query($con,"INSERT INTO `TSISERVER`.`posts` (`SENDER`, `MESSAGE`, `ICON`, `DATE`) VALUES ('".$_COOKIE['user_id']."', '".$msg."', '".$icon ."', CURRENT_TIMESTAMP)");


		mysqli_close($con);
		
		header("Location: account?id=".$_COOKIE['user_id']);
		exit();
  
} else {
	header("Location: account?id=".$_COOKIE['user_id']);
	exit();
}



?>
