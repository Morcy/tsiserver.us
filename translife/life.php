<?php
	if($_GET['sex'] == 'f')
	{
		$file = "m-to-f.php";
	}else if($_GET['sex'] == 'm')
	{
		$file = "f-to-m.php";
	}
?>
<!DOCTYPE>
<html>
	<head>
	<title>TransLife: The Game Which Changes Lives</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		
		<?php include("data/".$file); ?>
		
		<div id="footnote" class="bottom">
			  <li><a href="life?sex=f" class="girl"><span><center>To Girl</center></span></a></li>
			  <li><a href="life?sex=m" class="boy"><span><center>To Boy</center></span></a></li>
		</div>
	</body>
</html>