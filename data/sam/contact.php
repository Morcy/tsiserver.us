<!DOCTYPE HTML>
<!--
	Twenty 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact - Tactician Studios LLC</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
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
	<body class="contact loading">
	
		<!-- Header -->
			<?php include('common/head.php');?>
		
		<!-- Main -->
			<article id="main">

				<header class="special container">
					<span class="icon fa-envelope"></span>
					<h2>Get In Touch</h2>
					<p>Use the form below to give us a piece of your mind.</p>
				</header>
					
				<!-- One -->
					<section class="wrapper style4 special container small">
					
						<!-- Content -->
							<div class="content">
								<?php if(isset($_GET['a'])){?>
									
								<strong>Thank you for the message! We will reply shortly!</strong>	
								<?php }else{ ?>
								<form name="contact" action="sendMySMS" onsubmit="return validateForm()" method="post">
									<div class="row half no-collapse-1">
										<div class="6u">
											<input type="text" name="name" placeholder="Name"><span style="color:red; display: none;" id="error1">Please Enter your name!</span>
										</div>
										<div class="6u">
											<input type="text" name="email" placeholder="Email"><span style="color:red; display: none;" id="error2">Please Enter your email!</span></input>
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<input type="text" name="subject" placeholder="Subject"><span style="color:red; display: none;" id="error3">Please Enter a subject!</span></input>
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<textarea name="message" placeholder="Message" rows="7"></textarea>
											<span style="color:red; display: none;" id="error4">Please Enter a message!</span>
											
										</div>
									</div>
									<div class="row">
										<div class="12u">
											<ul class="buttons">
												<li><input type="submit" class="button special" /></li>
											</ul>
										</div>
									</div>
								</form>
								<?php } ?>
							</div>
							
					</section>
				
			</article>

		<!-- Footer -->
			<?php include('common/foot.php');?>
		<script>
		function validateForm() {
			var passTest = true;
			var x = document.forms["contact"]["name"].value;
			if (x == null || x == "") {
				show("error1");
				passTest = false;
			}else{
				hide("error1");
			}
			var x = document.forms["contact"]["email"].value;
			var atpos = x.indexOf("@");
			var dotpos = x.lastIndexOf(".");
			if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
				show("error2");
				passTest = false;
			}else{
				hide("error2");
			}
			var x = document.forms["contact"]["subject"].value;
			if (x == null || x == "") {
				show("error3");
				passTest = false;
			}else{
				hide("error3");
			}
			var x = document.forms["contact"]["message"].value;
			if (x == null || x == "") {
				show("error4");
				passTest = false;
			}else{
				hide("error4");
			}
			
			return passTest;
		}
		
		
		function hide(field)
		{
			document.getElementById(field).style.display = 'none';
		}
		
		function show(field)
		{
			document.getElementById(field).style.display = 'block';
		}
		</script>
	</body>
</html>
