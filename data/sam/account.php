<?php if(!isset($_COOKIE['user_id']))
{ 
header("Location: index");
exit();
}
			$con=mysqli_connect("localhost","SEN","M5ZJ5AGDmtN4spHu","PlayStation_Network00");
			if (mysqli_connect_errno()) {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$result = mysqli_query($con,"SELECT * FROM `Accounts` WHERE `gamertag` = '".$_COOKIE['user_id']."'");
			
			while($row = mysqli_fetch_array($result)) {
			   $icon = $row['icon'];
				$about = $row['AboutMe'];
			}
			$userName = $_COOKIE['user_id'];
			mysqli_close($con);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Account - Tactician Studios LLC</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		
		<link rel="stylesheet" href="css/postbox.css">
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="left-sidebar loading">
	
		<!-- Header -->
			<?php include('common/head.php');?>

		
		<!-- Main -->
			<article id="main">

				<header class="special container">
					<h2>My <strong>Account</strong></h2>
				</header>
					
				<!-- One -->
					<section class="wrapper style4 container">
					
						<div class="row oneandhalf">
							<div class="4u">
								
								<!-- Sidebar -->
									<div class="sidebar">
										<section>
											<header>
												<h3><?php echo $_COOKIE['user_id'];?></h3>
											</header>
											<p id="UserIconFav"><img src="<?php echo $icon; ?>" width="200px"/></p>
											<footer>
												<div id="UploadFile" style="display:none;">
													<form action="changeIcon" method="post" enctype="multipart/form-data">
													<input type="file" name="file" id="file"><br>
													<input type="submit" class="button small" name="submit" value="Upload">
													<input type="button" class="button small" name="cancel" value="Cancel" onclick="CancelUpload();">
													</form>
												</div>
												<ul class="buttons" id="changeSel" >
													<li><a class="button small" onclick="Upload();">Change Icon</a></li>
												</ul>
											</footer>
										</section>

										<section>
											<header>
												<h3>About Me</h3>
											</header>
											<p><?php echo $about; ?></p>
											<footer>
												<div id="ChangeAbout" style="display:none;">
													<form action="changeAbout" method="post" enctype="multipart/form-data">
													<textarea name="about" rows="7" maxlength="500" style="resize: none;"><?php echo $about; ?></textarea>
													<input type="submit" class="button small" name="submit" value="Update">
													<input type="button" class="button small" name="cancel" value="Cancel" onclick="CancelUpdate();">
													</form>
												</div>
												<ul class="buttons" id="changeAb" >
													<li><a href="#ChangeAbout" class="button small" onclick="Update();">Change Message</a></li>
												</ul>
											</footer>
										</section>
									</div>

							</div>
							<div class="8u skel-cell-important">
								
								<!-- Content -->
									<div class="content">
										<section>
											<div id="loading" style="display: none;">
												<center>
													<strong>Please Wait</strong><br/>
													<img src="http://sierrafire.cr.usgs.gov/images/loading.gif" height="100px"/>
												</center>
											</div>
											<br/>
											<form id="PostUs" action="addUpdate" method="post" enctype="multipart/form-data" onsubmit="post();">
													<textarea name="message" rows="3" maxlength="500" style="resize: none;" placeholder="What's on your mind?"></textarea>
													<input type="submit" class="button small" name="submit" value="Post">
											</form>
											<header>
												<h3>Updates:</h3>
											</header>
											<?php
													$pageUrl = basename($_SERVER['PHP_SELF'], ".php") . "?";
													if(isset($_GET['pg']))
													{
														$pageNum = $_GET['pg'] ;
														$page = (int)$_GET['pg'] * 20;
														$page = (int)$page - 20;
														if($page > 0)
															$prev = true;
															
														$next = (int) $_GET['pg'] + 1;
													}else
													{
														$pageNum = 1;
														$page = (int)0;
														$next = 2;
													}
													include('common/TSI_P0$T.php');
											?>
										</section>
									</div>
	
							</div>
						</div>					
					</section>

					
			</article>

		<!-- Footer -->
			<?php include('common/foot.php');?>
		<script>
		function Upload()
		{
			 document.getElementById('changeSel').style.display = 'none'; 
			 document.getElementById('UploadFile').style.display = 'block';
		}
		function CancelUpload()
		{
			 document.getElementById('changeSel').style.display = 'block'; 
			 document.getElementById('UploadFile').style.display = 'none';
		}
		function Update()
		{
			 document.getElementById('changeAb').style.display = 'none'; 
			 document.getElementById('ChangeAbout').style.display = 'block';
		}
		function CancelUpdate()
		{
			 document.getElementById('changeAb').style.display = 'block'; 
			 document.getElementById('ChangeAbout').style.display = 'none';
		}
		function post()
		{
			 document.getElementById('PostUs').style.display = 'none';
			document.getElementById('loading').style.display = 'block'; 
			
			
		}
		</script>
	</body>
</html>