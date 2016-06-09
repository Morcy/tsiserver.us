 <?php
 /*
 Secure Download Script
 (C) 2014 TACTIIAN STUDIOS LLC
 Developed by Katy Pillman
 -----------------------------------------------
 MYSQL:
 CREATE TABLE IF NOT EXISTS `save` (
 `sessionID` varchar(500) NOT NULL,
 `IP` varchar(500) NOT NULL DEFAULT 'n/a',
 `location` varchar(5000) NOT NULL,
 `expired` varchar(25) NOT NULL DEFAULT 'FALSE'
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 */
// You may verify that domain is "http://files.example.com/Download" if you like!
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

echo "Script loading";
// Set Login Information
$dbhost = 'localhost';
$dbuser = 'sce';
$dbpass = 'YQsfJpWwfPEqnuxD';
$dbname = 'files';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
die('Could not connect: ' . mysql_error());
}
// If IP Lock, use variable $ip
$ip = $_SERVER['REMOTE_ADDR'];

$key = $_GET['key'];
$sql = "SELECT * FROM `link` WHERE `id` = \"".$key."\"";
mysql_select_db($dbname);

$retval = mysql_query( $sql, $conn );

if(! $retval )
{
die('Could not find file!');
}
$info = mysql_fetch_array( $retval );
$data = $info['file'];

// Finsh MySQL work
mysql_close($conn);


// Edit to fit file settings, $data contains full URL grabbed from Database
header('Content-Disposition: attachment; filename="'.basename($data).'"');
header("Content-Transfer-Encoding: binary");
header("Content-Type: application/exe");

readfile($data);


?>