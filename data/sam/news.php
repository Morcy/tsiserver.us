
<!DOCTYPE HTML>
<html>
	<head>
		<title>Users - Tactician Studios LLC</title>
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
					<h2>OUR <strong>USERS</strong></h2>
				</header>
					
				<!-- One -->
					<section class="wrapper style4 container">
					
						<div class="row oneandhalf">
							<div class="4u">
								
								<!-- Sidebar -->
									<div class="sidebar">
										
										<section>
											<header>
												<h3>About Us</h3>
											</header>
											<p>TSISERVER is an online website for our fans to post to each other and the world using our site. We are not responsible for any inappropriate posts.</p>
										</section>
										<section>
											<header>
												<h3>SPONSOR:</h3>
											</header>
											<p>
												<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
												<!-- TSI-USER PAGE POST FEED -->
												<ins class="adsbygoogle"
													 style="display:inline-block;width:300px;height:600px"
													 data-ad-client="ca-pub-3808523147243638"
													 data-ad-slot="6917602709"></ins>
												<script>
												(adsbygoogle = window.adsbygoogle || []).push({});
												</script>
											</p>
										</section>
									</div>

							</div>
							<div class="8u skel-cell-important">
								
								<!-- Content -->
									<div class="content">
										<section>
											<header>
												<h3>Latest Posts:</h3>
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
		
		</script>
	</body>
</html>