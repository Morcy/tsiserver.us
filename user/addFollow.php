
<?php
$following = $_GET['a'];
$follower = $_GET['b'];
$com = $following . $follower;
$con = mysqli_connect("localhost","SEN","M5ZJ5AGDmtN4spHu","PlayStation_Network00");
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"subs");
$sql="INSERT IGNORE INTO `PlayStation_Network00`.`subs` (`user`, `subber`, `combo`) VALUES ('".$following."', '".$follower."', '".$com."')";
$result = mysqli_query($con,$sql);
echo '1';
mysqli_close($con);
?>