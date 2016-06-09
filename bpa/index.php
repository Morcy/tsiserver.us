<?php session_start(); ?>
<html>
	<head>
		<title>TSI-BPA || V03</title>	
		<link rel="stylesheet" type="text/css" href="main.css">
		
	</head>
	<body>
		<strong>SMNW SOFTWARE TEAM V03</strong><br/><br/>
		<?php
			if(isset($_SESSION['auth']))
			{
		?>
			Links/Keys:<br/>
			<a href="http://go.microsoft.com/?linkid=9832325&clcid=0x409" target="_blank" style="color: red;">Visual Studio:</a> XDM3T-W3T3V-MGJWK-8BFVD-GVPKY
		<?php
			}else{
				if(isset($_POST['password']))
				{
					if($_POST['password'] == 'tsi')
					{
						$_SESSION['auth'] = true;
					}
					header("Location: index");
				}else{
		?>
			<form  method="post" action="index.php">
				
			<label>Password:</label>
			<input type="password" id="password" name="password"/>
			</form>
		<?php
				}
			}
		?>
	</body>
</html>