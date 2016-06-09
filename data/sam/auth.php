<?php
if(isset($_GET['gamertag']))
{
	//Sets cookie, then refreshes page
	setcookie('user_id',$_GET['gamertag'], time() + (86400 * 7),'/', 'beta.tsiserver.us'); // 86400 = 1 day
	
	
	
	$dbhost = 'localhost';
			$dbuser = 'SEN';
			$dbpass = 'M5ZJ5AGDmtN4spHu';
			$conn = mysql_connect($dbhost, $dbuser, $dbpass);
			
				if($conn)
				{
					$os = (string)$_SERVER['HTTP_USER_AGENT'];
					$sql = "INSERT IGNORE INTO `Accounts` (`gamertag`, `AboutMe`) VALUES ('".$_GET['gamertag']."', 'I am a loving giraffe!');";

					mysql_select_db('PlayStation_Network00');
					$retval = mysql_query( $sql, $conn );
					
					mysql_close($conn);
				}
				
	
	header ("Location: http://beta.tsiserver.us");
	exit();
}

if(isset($_GET['logout']))
{
	if (isset($_COOKIE['user_id'])) {
					unset($_COOKIE['user_id']);
					setcookie('user_id', null, -1, '/', 'beta.tsiserver.us');
	}
	header ("Location: http://beta.tsiserver.us");
	exit();
}












/* Hacker Finder*/
header ("Location: http://beta.tsiserver.us/404");
	exit();
?>
