<?php
if(isset($_GET['gamertag']))
{
	//Sets cookie, then refreshes page
	setcookie('user_id',$_GET['gamertag'], time() + (86400 * 7),'/', 'tsiserver.us'); // 86400 = 1 day
	
	
	
			$dbhost = 'us-cdbr-azure-central-a.cloudapp.net';
			$dbuser = 'bac0b14d8b49ce';
			$dbpass = '1261d3b9';
			$conn = mysql_connect($dbhost, $dbuser, $dbpass);
			
				if($conn)
				{
					$os = (string)$_SERVER['HTTP_USER_AGENT'];
					$sql = "INSERT IGNORE INTO `accounts` (`gamertag`, `AboutMe`) VALUES ('".$_GET['gamertag']."', 'I am a loving giraffe!');";

					mysql_select_db('TSISERVER');
					$retval = mysql_query( $sql, $conn );
					
					mysql_close($conn);
				}
				
	
	header ("Location: /index?gt");
	exit();
}

if(isset($_GET['logout']))
{
	if (isset($_COOKIE['user_id'])) {
					unset($_COOKIE['user_id']);
					setcookie('user_id', null, -1, '/', 'tsiserver.us');
	}
	header ("Location: /index");
	exit();
}












/* Hacker Finder*/
header ("Location: /404");
	exit();
?>
