<?php
session_start();
?>
<?php
	
	$weeks = 3;
	$latest = $weeks;


	if(isset($_GET['week']))
	{
		if(((int)$_GET['week']) <= $weeks)
			$id = $_GET['week'];
		else
			$id = $latest;
	}else{
		$id = $latest;
	}
	$week = 'posts/week'.$id.'.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pillman, Katy - Life Journey</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="author" content="tsiserver.us">
	<meta name="description" content="Life is hard, espicially when born assigned the mistaken gender."/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<link rel="icon" href="favicon.ico">
</head>
<body>
	<header>
		<div class="logo">
			<a href="index.html"><img src="img/logo.png"/></a>
		</div><!-- end logo -->

		<div id="menu_icon"></div>
		<nav>
			<ul>
				<li><a href="index.html" class="selected">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="news">Journal</a></li>
				<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</nav><!-- end navigation menu -->

			<div class="footer clearfix">
			<div class="rights">
				<p>Copyright © 2014 Pillman.</p>
				<p>Hosted by <a href="http://tsiserver.us">tsiserver.us</a></p>
			</div><!-- end rights -->
		</div ><!-- end footer -->
		</div ><!-- end footer -->
	</header><!-- end header -->

	<section class="main clearfix">

		<section class="top">	
			<div class="content_header clearfix"  style="text-align: right;float: right; width: 92.72727272727273%;">
				<div class="work_nav">
							
					<ul class="btn clearfix">
						<?php if(((int)$id) > 1){
						$prev = ((int)$id)-1;
						?>
						<li><a href="news?week=<?php echo $prev;?>" class="previous" data-title="Previous"></a></li>
						<?php }?>
						<li><a href="about.html" class="grid" data-title="About"></a></li>
						<?php if(((int)$id) < $weeks){
						$next = ((int)$id)+1;
						?>
						<li><a href="news?week=<?php echo $next;?>" class="next" data-title="Next"></a></li>
						<?php }?>
					</ul>							
					
				</div><!-- end work_nav -->
				<h1 class="title" style="width: 100%;">Katy's Weekly Adventure</h1>
			</div>		
		</section><!-- end top -->

		<section class="wrapper">
			<div class="content">
				
				<?php include $week; ?>
				
				<?php
				$cmtx_identifier = $id;
				$cmtx_reference = 'Week ' . $id;
				$cmtx_path = 'aj/';
				require $cmtx_path . 'includes/commentics.php'; //don't edit this line
				?>
			</div><!-- end content -->
		</section>
	</section><!-- end main -->
	
</body>
</html>