<?php 
include "app/config.php";

include "app/detect.php";

if(empty($_SERVER['HTTPS'])){
header("Location: https://www.tsiserver.us/company/" . $page_name);
exit();
}


if ($page_name=='') {

	include $browser_t.'/index.html';

	}

elseif ($page_name=='index.html') {

	include $browser_t.'/index.html';

	}

elseif ($page_name=='contact-post.html') {

	include 'app/contact.php';

	}

else

	{

		header("Location: https://www.tsiserver.us/company/");
		exit();
	}



?>

