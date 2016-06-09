<?php

$ct = (int) 0;
$con=mysqli_connect("us-cdbr-azure-central-a.cloudapp.net","bac0b14d8b49ce","1261d3b9","TSISERVER");


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

<div class="postBox">															
	<p style="padding-left: 10px; padding-right: 10px;">
		<div class="user-name"><a href="player?id=<?php echo $row['SENDER'];?>"  style="text-decoration: none; color: white;"><?php echo $row['SENDER'];?></a></div>
		
		<img align="left" class="postImage" src="<?php  echo $row['ICON'];?>" width="50px">
		<span class="postText"><?php  echo $row['MESSAGE'];?></span>
		
		
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

	
