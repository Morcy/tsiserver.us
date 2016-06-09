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
														$con=mysqli_connect("localhost","SEN","M5ZJ5AGDmtN4spHu","PlayStation_Network00");
														if (mysqli_connect_errno()) {
														  echo "Failed to connect to MySQL: " . mysqli_connect_error();
														}

														$result = mysqli_query($con,"SELECT * FROM `Posts` WHERE `SENDER` = '".$userName."' Order by `DATE` desc");
														
														
														$noPost = true;
														while($row = mysqli_fetch_array($result)) {
														
															if(strlen($row['MESSAGE']) == 0)
															{
																
															}else{
															$noPost = false;
															?>
															
															
														  <div class="postBox">															
																<p style="padding-left: 10px; padding-right: 10px;">
																<div class="user-name"><?php echo $row['SENDER'];?></div>
															
															<img align="left" class="postImage" src="<?php  echo $row['ICON'];?>" width="50px">
															<span class="postText"><?php  echo $row['MESSAGE'];?></span>
															  <ul class="sub-link">
																<li><a href=""> Profile </a></li>
															  </ul>
															  
														 </div>
														  
														  
															<?php
															}
														}
														 if($noPost)
														 {
															echo "<div>This user has no posts!</div>";
														}
														mysqli_close($con);
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