<?php 
	if(!isset($_GET['id']) && !isset($_COOKIE['user_id']))
	{ 
		header("Location: ../login");
		exit();
	}else if(!isset($_GET['id']) && isset($_COOKIE['user_id']))
	{ 
		header("Location: ?id=".$_COOKIE['user_id']);
		exit();
	}

		$userName = $_GET['id'];
			$con=mysqli_connect("us-cdbr-azure-central-a.cloudapp.net","bac0b14d8b49ce","1261d3b9","TSISERVER");
			if (mysqli_connect_errno()) {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$result = mysqli_query($con,"SELECT * FROM `accounts` WHERE `gamertag` = '".$userName."'");
			
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
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<link rel="icon" type="image/ico" href="http://tsiserver.us/rsz_1logo.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!---start-webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---//End-webfonts--->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="../css/postbox.css" rel="stylesheet" type="text/css" media="all" />
		<!----//webfonts---->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<!--graph-->
		<link rel="stylesheet" href="css/graph.css">
		<!--//graph-->
		<!--post-->
		<style>
		  .bubble {
			position: relative;
			width: 90%;
			height: 100px;
			padding: 0px;
			padding-top: 10px;
			margin-left: 5%;
			margin-right: 5%;
			margin-bottom: 25px;
			background: -webkit-linear-gradient(71deg, #B400AE 12%, #EB00D0 100%);
			background: -moz-linear-gradient(71deg, #B400AE 12%, #EB00D0 100%);
			background: -ms-linear-gradient(71deg, #B400AE 12%, #EB00D0 100%);
			background: linear-gradient(161deg, #EB00D0 12%, #B400AE 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#EB00D0', endColorstr='#B400AE');
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			-webkit-box-shadow: 2px 2px 10px 0px #616161;
			-moz-box-shadow: 2px 2px 10px 0px #616161;
			box-shadow: 2px 2px 10px 0px #616161;
			}

		  .bubble:after {
			content: "";
			position: absolute;
			top: -13px;
			left: 7px;
			border-style: solid;
			border-width: 0 25px 13px;
			border-color: #eb00d0 transparent;
			display: block;
			width: 0;
			z-index: 1;
			}

		</style>
		<style type="text/css">
		.button_icon {
			-moz-box-shadow:inset 0px 1px 0px 0px #e184f3;
			-webkit-box-shadow:inset 0px 1px 0px 0px #e184f3;
			box-shadow:inset 0px 1px 0px 0px #e184f3;
			background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #c123de), color-stop(1, #a20dbd) );
			background:-moz-linear-gradient( center top, #c123de 5%, #a20dbd 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c123de', endColorstr='#a20dbd');
			background-color:#c123de;
			-webkit-border-top-left-radius:20px;
			-moz-border-radius-topleft:20px;
			border-top-left-radius:20px;
			-webkit-border-top-right-radius:20px;
			-moz-border-radius-topright:20px;
			border-top-right-radius:20px;
			-webkit-border-bottom-right-radius:20px;
			-moz-border-radius-bottomright:20px;
			border-bottom-right-radius:20px;
			-webkit-border-bottom-left-radius:20px;
			-moz-border-radius-bottomleft:20px;
			border-bottom-left-radius:20px;
			text-indent:0;
			border:1px solid #a511c0;
			display:inline-block;
			color:#ffffff;
			font-family:Arial Black;
			font-size:10px;
			font-weight:bold;
			font-style:normal;
			height:25px;
			line-height:25px;
			width:90px;
			text-decoration:none;
			text-align:center;
			text-shadow:1px 15px 17px #9b14b3;
		}
		.button_icon:hover {
			background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #a20dbd), color-stop(1, #c123de) );
			background:-moz-linear-gradient( center top, #a20dbd 5%, #c123de 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#a20dbd', endColorstr='#c123de');
			background-color:#a20dbd;
		}.button_icon:active {
			position:relative;
			top:1px;
		} 

		#cover { 
			position:fixed; 
			top:0; 
			left:0; 
			background:rgba(0,0,0,0.9); 
			z-index:5; 
			width:100%; 
			height:100%; 
			display:none; 
		} 
		#tos { 
			height:100%; 
			width:80%; 
			margin:0 auto; 
			position:relative; 
			background-color: rgba(255,255,255, 0.8); 
			z-index:10; 
			display:none; 
			border:5px solid #cccccc; 
			border-radius:10px; 
			overflow-y: scroll;
		} 
		#tos:target, #tos:target + #cover{ display:block; opacity:2; } 
		#privacy { 
			height:100%; 
			width:80%; 
			margin:0 auto; 
			position:relative; 
			background-color: rgba(255,255,255, 0.8); 
			z-index:10; 
			display:none; 
			border:5px solid #cccccc; 
			border-radius:10px; 
			overflow-y: scroll;
		} 
		#privacy:target, #privacy:target + #cover{ display:block; opacity:2; } 
		
		.cancel { 
			display:block; 
			position:fixed; 
			top:3px; 
			right:2px; 
			background:rgb(245,245,245); 
			color:black; 
			height:30px; 
			width:35px; 
			font-size:30px; 
			text-decoration:none; 
			text-align:center; 
			font-weight:bold; 
		} 
		</style>
		<!-- //post -->
	</head>
	<body>
		<!-- Legal Documentation -->
		
		<div id="tos">
				<?php include('../common/tos.php');?>
				<a href="#" class="cancel">&times;</a> 
		</div>
		<div id="privacy">
				<?php include('../common/privacy.php');?>
				<a href="#" class="cancel">&times;</a> 
		</div>
		<div id="cover" > 
			
		</div>
		<!-- End Documentation -->
		<!---start-wrap--->
		<div class="wrap">
			<!---start-content---->
			<div class="content">
				<!---start-left-content--->
				<div class="left-content">
					<!---start-portfolio-weight---->
					<script>
					function followUser(main, sub) {
					  if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp=new XMLHttpRequest();
					  } else { // code for IE6, IE5
						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					  xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState==4 && xmlhttp.status==200) {
						  document.getElementById("userFollowers").innerHTML=xmlhttp.responseText;
						}
					  }
					  xmlhttp.open("POST","addFollow.php?a="+main+"&b="+sub,true);
					  xmlhttp.send();
					}
					</script>
					<div class="portfolio-weight">
						<div class="portfolio-weight-head">
							<div class="portfolio-weight-people">
								<span style="background:url(<?php echo $icon; ?>) no-repeat 0px 0px; background-size: 150px 150px;">  </span>
							</div>
							<h3><?php echo $userName;?></h3>
							<label><?php echo $about; ?></label>
						</div>
						<div class="portfolio-weight-bottom">
							<ul>
								<li  <?php if(isset($_COOKIE['user_id'])){ echo 'onclick="followUser(\''. $userName . '\',\''. $_COOKIE['user_id'] . '\');"';} ?>><a><?php $link = 'https://tsiserver.us/user/ctFollower?id='.$userName; $num = file_get_contents($link); echo $num;?><span>Followers</span></a></li>
								<li><a href="#" id="userFollowing"><?php $link = 'https://tsiserver.us/user/ctFollowing?id='.$userName; $num = file_get_contents($link); echo $num;?><span>Following</span></a></li>
								<div class="clear"> </div>
							</ul>
						</div>
						<!-- http://www.w3schools.com/php/php_ajax_database.asp <- Follow Ajax Script -->
						<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					<!---//End-portfolio-weight---->
					<?php if(!isset($_COOKIE['user_id']))
					{
					?>
					<!---start-userlogin---->
					<div class="userlogin">
						<form method="post" action="https://www.tsiserver.us/psn/out.php?returnURL=http%3A%2F%2Fpsn.tsiserver.us%2Ftsi.php" id="mainform" name="mainform">
							<div class="form-head">
								<div>
									<span class="user-icon">
										
									</span>
									<input type="text" id="userName" name="userName" placeholder="youremail@example.com" required />
								</div>
								<div>
									<span class="lock-icon">
										
									</span>
									<input placeholder="Password" id="password" name="password" type="password" placeholder="********" required />
								</div>
							</div>
							<div class="form-bottom">
								<div>
									<span> </span>
									<input type="submit" value="Slide to login" />
								</div>
							</div>
						</form>
					</div>
					<!---//End-userlogin---->
					<?php }else{ ?>
					<!---start-drop-doenmenu--->
							<div class="drop-down-menu">
								<ul>
									<li><a class="d-icon1" href="https://tsiserver.us/user?id=<?php echo $_COOKIE['user_id']; ?>&edit=true"><span> </span>Account Setting</a></li>
									<li><a class="d-icon3" href="https://tsiserver.us/user?id=<?php echo $_COOKIE['user_id']; ?>"><span> </span>View Account</a></li>
								</ul>
							</div>
					<!---//End-drop-doenmenu--->
					<?php } ?>
				</div>
				<!---//End-left-content--->
				<!---start-right-content--->
				<div class="right-content">
					<!----start-right-content-box---->
					<div class="right-content-box">
						<div class="right-content-box-left">
							
								<!---- start-audio-plyer---->
								<!---- start-audio-plyer-files---->
								<link rel="stylesheet" href="css/bbplayer.css"/>
								 <script src="js/bbplayer.js"></script>
								<!---- //End-audio-plyer-files---->
								<div class="audio-plyer">
									<div class="bbplayer">
									      <span class="bb-play"></span><span class="bb-rewind"></span><span class="bb-forward"></span>
									      <span class="bb-trackTime">--:--</span> 
									      <span class="bb-trackLength">--:--</span>
									      <span class="bb-trackTitle">&nbsp;</span>
									      <audio>
									        <source src="media/Let It Go.mp3" type="audio/mpeg"></source>
									        <source src="media/A Thousand Years.mp3" type="audio/mpeg"></source>
									      </audio>
									</div>
								</div>
								<!---- //End-audio-plyer---->
			
								<?php 
								
								
								if(isset($_COOKIE['user_id']) && $_COOKIE['user_id'] == $_GET['id'] && isset($_GET["edit"]))
								{
									?>
									<div style="background: #FF00A2;border-radius: 10px;border: 1px solid #eb008e; margin: 5px; margin-top: 25px;">
										<div style=" margin-top: 25px;">
											<img src="<?php echo $icon;?>" class="postImage" style="margin-left: 5%; margin-bottom: 15px;border-radius: 45px; -webkit-border-radius: 45px; -moz-border-radius: 45px; background: url(<?php  echo $icon;?>) no-repeat;" width="50px">
												<div id="UploadFile" style="display:none;margin-left: 3%;">
													<form action="../changeIcon" method="post" enctype="multipart/form-data">
													<input type="file" name="file" id="file"><br>
													<input type="submit" class="button_icon" name="submit" value="Upload">
													<input type="button" class="button_icon" name="cancel" value="Cancel" onclick="CancelUpload();">
													</form>
												</div>
												<ul class="buttons" id="changeSel" style="margin-left: 2%;">
													<li><a class="button_icon" onclick="Upload();">Change Icon</a></li>
												</ul>
										</div>
										<br/>
										<section>
											<header>
												<h3>Your Description:</h3>
											</header>
											<p><?php echo $about; ?></p>
											<footer>
												<div id="ChangeAbout" style="display:none;">
													<form action="../changeAbout" method="post" enctype="multipart/form-data">
														<center style="margin-bottom: 20px;">
															<textarea name="about" rows="7" maxlength="100" style="width: 90%; height: 120px;border: 3px solid #cccccc;padding: 5px;font-family: Tahoma, sans-serif;resize: none;"><?php echo $about; ?></textarea>
															<input type="submit" class="button_icon"  name="submit" value="Update">
															<input type="button" class="button_icon" name="cancel" value="Cancel" onclick="CancelUpdate();">
														</center>
													</form>
												</div>
												<ul class="buttons" id="changeAb" >
													<li><a href="#ChangeAbout" class="button_icon" style="width: 120px;" onclick="Update();">Change Message</a></li>
												</ul>
											</footer>
										</section>
									</div>
				
				
				
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
									<?php
								}else
								{
									if(isset($_COOKIE['user_id']) && $_COOKIE['user_id'] == $_GET['id'])
									{
									
								?>
									<div class="bubble" style="height: 150px;">
										<center>
											<div id="loading" style="display: none;">
												<center>
													<strong>Please Wait</strong><br/>
													<img src="http://sierrafire.cr.usgs.gov/images/loading.gif" height="100px"/>
												</center>
											</div>
											<br/>
											<form id="PostUs" action="../addUpdate" method="post" enctype="multipart/form-data" onsubmit="post();">
													<textarea name="message" rows="7" maxlength="500" style="width: 80%; height: 80px;border: 3px solid #cccccc;padding: 5px;font-family: Tahoma, sans-serif;resize: none;" placeholder="What's on your mind? Let us know!"></textarea>
													<br>
													<input type="submit" class="button_icon" name="submit" value="Post">
											</form>
										</center>
									</div>
									<?php } ?>
									<div>
										<section>
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
													include('GET_P0$T.php');
											?>
										</section>
									</div>
							<?php } ?>
			
						</div>
						<div class="right-content-box-right">
							
							<!----start-ads---->
							<div class="loding">
									<div class="loding-head">
										<span style="margin-left: -10px;">
											<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
											<!-- TSI-USER PAGE POST FEED -->
											<ins class="adsbygoogle"
												 style="display:inline-block;width: 90%;height:600px"
												 data-ad-client="ca-pub-3808523147243638"
												 data-ad-slot="6917602709"></ins>
											<script>
											(adsbygoogle = window.adsbygoogle || []).push({});
											</script>
										</span>
										
										<div class="clear"> </div>
									</div>
									<div class="loding-bottom">
										<p>
											The Advertisment above helps pay to keep your information safe from hackers. Please do not remove the ads if you don't want hackers stealing your information.
										</p>
									</div>
							</div>
							<!----//End-ads---->
						</div>
						<div class="clear"> </div>
						<div class="copy-right">
							<p><a href="#privacy">Privacy Statement</a>&nbsp;<a href="#tos">Terms and Conditions</a></p>
							<p>&copy; 2014 Tactician Studios LLC.</p>
						</div>
			<!---//End-copy-right--->
					</div>
					<!----//End-right-content-box---->
				</div>
				<!---//End-right-content--->
				<div class="clear"> </div>
			</div>
			<!---//End-content---->
			<!---start-copy-right--->
			
		</div>
		<!---//End-wrap--->
		
	</body>
</html>

