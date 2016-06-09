<?php 
	$video = $_GET['v'];
?>
<div style="width:616px;height:348px; margin-top: 0px; margin-left: 0px; left: 0px; top: 0px; position: absolute;">
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%" id="psPlayer">
		<param name="movie" value=https://www.playstation.com/etc/designs/pdc/clientlibs_youtube/swf/ps-youtube-player.swf?v=<?php echo $video; ?>&embedding=0&autoplay=0&sharing=0&fullscreen=1 />
		<param name="allowfullscreen" value="true" />
		<param name="scale" value="noscale" />
		<param name="menu" value="false">
		<param name="allowfullscreen" value="true">
		<param name="allowscriptaccess" value="always">
		<param name="bgcolor" value="#000000">
		<param name="allownetworking" value="all">
		<param name="wmode" value="transparent">
			<object type="application/x-shockwave-flash" data=https://www.playstation.com/etc/designs/pdc/clientlibs_youtube/swf/ps-youtube-player.swf?v=<?php echo $video; ?>&embedding=0&autoplay=0&sharing=0&fullscreen=1 width="100%" height="100%"> 
			<param name="scale" value="noscale" />
			<param name="allowfullscreen" value="true" />
			<param name="allowscriptaccess" value="always" />
				<a href="//www.adobe.com/go/getflashplayer">
					<img src="//www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
				</a>
			</object>
	</object>
</div>
