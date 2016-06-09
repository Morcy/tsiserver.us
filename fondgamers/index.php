<?php 
// Create the function, so you can use it
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
// If the user is on a mobile device, redirect them
if(isMobile()) {
    header("Location: mobile/index.html");
	}  else {
			header("location: web/index.html"); 
	}
?>
<html>
<head>
<title> FondGamers.com </title>
</head>
<body>
<style>
body,html {background:black;}
</style>
</body>
</html>

