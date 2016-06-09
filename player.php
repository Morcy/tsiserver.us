<?php if(!isset($_GET['id']))
{ 
header("Location: news");
exit();
}

$userName = $_GET['id'];
			$con=mysqli_connect("localhost","SEN","M5ZJ5AGDmtN4spHu","PlayStation_Network00");
			if (mysqli_connect_errno()) {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$result = mysqli_query($con,"SELECT * FROM `Accounts` WHERE `gamertag` = '".$userName."'");
			
			while($row = mysqli_fetch_array($result)) {
			   $icon = $row['icon'];
				$about = $row['AboutMe'];
			}
			
			
			mysqli_close($con);
			
			
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $userName;?> - Tactician Studios LLC</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="icon" type="image/ico" href="http://tsiserver.us/rsz_1logo.ico">
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
					<h2><?php echo $userName;?>'s <strong>Account</strong></h2>
				</header>
					
				<!-- One -->
					<section class="wrapper style4 container">
					
						<div class="row oneandhalf">
							<div class="4u">
								
								<!-- Sidebar -->
									<div class="sidebar">
										<section>
											<header>
												<h3><?php echo $userName;?></h3>
											</header>
											<p id="UserIconFav"><img src="<?php echo $icon; ?>" width="200px"/></p>
										</section>

										<section>
											<header>
												<h3>About Me</h3>
											</header>
											<p><?php echo $about; ?></p>
										</section>
									</div>

							</div>
							<div class="8u skel-cell-important">
								
								<!-- Content -->
									<div class="content">
										<section>
											<header>
												<h3>Updates:</h3>
											</header>
											<?php
													$pageUrl = basename($_SERVER['PHP_SELF'], ".php") . "?id=" .$userName . "&";
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
		
		</script>
	</body>
</html>