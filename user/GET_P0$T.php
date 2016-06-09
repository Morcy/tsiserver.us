<?php

$ct = (int) 0;
$con=mysqli_connect("localhost","SEN","M5ZJ5AGDmtN4spHu","PlayStation_Network00");
/*
$conn=mysqli_init();
mysqli_ssl_set($conn, '/etc/mysql/client-key.pem', '/etc/mysql/client-cert.pem', NULL, NULL, NULL);
if (!mysqli_real_connect($conn, 'localhost', 'SEN', 'M5ZJ5AGDmtN4spHu','PlayStation_Network00')) { echo mysqli_connect_error(); die(); }
$res = mysqli_query($conn, 'SELECT * FROM `Posts`');
print_r(mysqli_fetch_row($res));
mysqli_close($conn);
*/
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if(isset($userName))
{
$result = mysqli_query($con,"SELECT * FROM `Posts` WHERE `SENDER` = '".$userName."' Order by `DATE` desc LIMIT ".$page.", 20;");
}else{
$result = mysqli_query($con,"SELECT * FROM `Posts` Order by `DATE` desc LIMIT ".$page.", 20;");
}
																												
														
$noPost = true;
while($row = mysqli_fetch_array($result)) {
$ct = (int) $ct + 1;													
if(strlen($row['MESSAGE']) == 0)
{
																
}else{
	$noPost = false;
	
?>

<img src="<?php  echo $row['ICON'];?>" class="postImage" style="margin-left: 5%; margin-bottom: 15px;border-radius: 45px; -webkit-border-radius: 45px; -moz-border-radius: 45px; background: url(<?php  echo $row['ICON'];?>) no-repeat;" width="50px">

<div class="bubble">															
	<p style="padding-left: 10px; padding-right: 10px;">
		
		<span class="postText"><?php  echo $row['MESSAGE'];?></span>
		
	</p>	
</div>

<?php
	}
}
	if($noPost)
	{
		echo "<div>The site has no posts at page ".$pageNum ."!</div>";
	}
	mysqli_close($con);
														
	?>
	<center>
	<?php
	if($prev)
	{
		$prevPage = (int) $_GET['pg'] - 1;
		echo '<a href="https://tsiserver.us/'.$pageUrl.'pg='.$prevPage.'" style="text-decoration: none;" class="button small" name="prev" >Previous Page</a>';
	}
	
	if($ct >=19)
	{
		echo '<a href="https://tsiserver.us/'.$pageUrl.'pg='.$next.'" style="text-decoration: none;" class="button small" name="next">Next Page</a>';
	}

	?>
	</center>

	
