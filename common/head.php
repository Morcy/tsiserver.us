
<?php
/*
if(empty($_SERVER['HTTPS'])){
$pageName = basename($_SERVER['PHP_SELF'],'.php'); 
	if(!empty($_SERVER['QUERY_STRING']))
	{
		$pageName = $pageName . '?' . $_SERVER['QUERY_STRING'];
	}
header("Location: https://tsiserver.us/" . $pageName);
exit();
}*/
?>

<header id="header">
				<h1 id="logo"><a href="index">Tactician <span>Studios</span></a></h1>
				<nav id="nav">
					<ul>
						<li class="current"><a href="index">Welcome</a></li>
						<li class="current"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VVCNBRTC5B9CS">DONATE</a></li>
						
						
						<li class="submenu">
							<a href="">More</a>
							<ul>
								<li><a href="terms">Terms and Policy</a></li>
								<li><a href="jobs">Careers</a></li>
								<li><a href="store">Store</a></li>
								<li><a href="news">TSI Users</a></li>
								<li><a href="contact">Contact</a></li>
							</ul>
						</li>
						<?php if(isset($_COOKIE['user_id'])){ ?>
						<li class="submenu" style="padding-right: 50px;">
							<a href=""><?php echo $_COOKIE['user_id'];?></a>
							<ul>
								<li><a href="account">My Account [OLD]</a></li>
								<li><a href="user?id=<?php echo $_COOKIE['user_id'];?>">My Account [BETA]</a></li>
								<li><a href="auth?logout=TRUE">Sign-out</a></li>
							</ul>
						</li>
						<?php }else{?>
						<li><a href="login" class="button special" title="Sign in via your PlayStation&reg;Network Account" >Sign In</a></li>
						<?php }?>
					</ul>
				</nav>
</header>

