<!DOCTYPE HTML>
<html>
	<head>
		<title>Login to Tactician Studios LLC's site</title>
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
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="no-sidebar loading">
	
		<?php include('common/head.php'); ?>
		<!-- Main -->
			<article id="main">

				<header class="special container">
					<h2>SEN <strong>Login</strong></h2>
				</header>
					
				<!-- One -->
					<section class="wrapper style4 container">
					
						<!-- Content -->
							<div class="content">
								<section>
									<form method="get" action="auth" id="mainform" name="mainform" class="loginBox" style="background: rgba(0,0,0,1.0);padding: 2px; ">
													<p style="padding-top:10px;">
														<label id="selLabelSignInWithHint">Sign-In ID <small>(E-mail Address)</small></label>
												<input class="textField" id="gamertag" name="gamertag" placeholder="GamerTag" value="<?php echo $email; ?>" type="text" style="color: #00CC00;">
														<br style="clear:both;"><br style="clear:both;">
													</p>
													
													<p>
														Just leave blank... use username as email (no-auth)
														<label id="selLabelPassword">Password: </label>
														<input class="textField" id="password" name="password" type="password" placeholder="********" autocomplete="off" style="color: #00CC00;"> 
														<br style="clear:both;"><br style="clear:both;">
													</p>      
											<center><input type="submit" class="button special" value="Sign In"/><a href="https://account.sonyentertainmentnetwork.com/liquid/reg/account/create-account!input.action" target="_BLANK"><input type="button" class="button special" value="Sign Up"/></a></center>
											</form>
										<small class="boxBtm" id="selLabelLegalNotice" style="margin-top: -200px;">If you use PSN℠ log-in details to access this site, basic information about your PSN℠ account will be shared with the website operator. PSN℠ is not responsible for operation of this website. See <a href="http://www.scei.co.jp/ps3-eula/" target="blank">Privacy Policy</a> for more information.</small>
									</div>
									</section>
							</div>

					</section>

				<!-- Two -->
							
			</article>

		<!-- Footer -->
			<?php include('common/foot.php');?>

	</body>
</html>
