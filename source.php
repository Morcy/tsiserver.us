<?php

if(!isset($_GET['file']))
{
$file = "No File";
}else{
$src = 'http://source.gtawwekid.com/src/' . $_GET['file'];

$tst = substr($src, -2);
if($tst != "cs")
{
	$src = $src. '.cs';
}

$fh = fopen($src, 'r');

$pageText = fread($fh, 999999);

$file = nl2br($pageText);
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Source Code - Tactician Studios LLC</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="icon" type="image/ico" href="http://tsiserver.us/rsz_1logo.ico">
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="no-sidebar" style="-moz-user-select: none;  -webkit-user-select: none;  -ms-user-select: none;  -o-user-select: none;  user-select: none;">
	
		<!-- Header -->
			<?php include('common/head.php');?>
		<!-- Main -->
			<article id="main" style="-moz-user-select: none;  -webkit-user-select: none;  -ms-user-select: none;  -o-user-select: none;  user-select: none;">
					
					<section class="wrapper style4 container" style="-moz-user-select: none;  -webkit-user-select: none;  -ms-user-select: none;  -o-user-select: none;  user-select: none;">
					
						<!-- Content -->
							<div class="content" style="-moz-user-select: none;  -webkit-user-select: none;  -ms-user-select: none;  -o-user-select: none;  user-select: none;">
								<section>
									<header>
										<h3>Tactician Software :: SOURCE</h3>
									</header>
									
									<p style="-moz-user-select: none;  -webkit-user-select: none;  -ms-user-select: none;  -o-user-select: none;  user-select: none;"><div id="" style="overflow-y: scroll; height:600px;"><?php echo $file;?></div></p>
									<p>&copy;2014 Tactician Studios LLC - All rights reserved</p>
									</section>
							</div>

					</section>

			</article>
		<!-- Footer -->
			<?php include('common/foot.php');?>

	</body>
</html>