<body style="margin: 0px 0px 0px 0px;overflow-x:hidden;" >
<?php 
	function ping($host, $port, $timeout) { 
	  $tB = microtime(true); 
	  $fP = fSockOpen($host, $port, $errno, $errstr, $timeout); 
	  if (!$fP) { return "down"; } 
	  $tA = microtime(true); 
	  return round((($tA - $tB) * 1000), 0)." ms"; 
	}

	
	$website = ping("64.126.89.241", 80, 10);
	if($website != "down"
	)
	{
	  echo'<iframe src="http://64.126.89.241/" frameBorder="0" style="position: fixed;margin: 0px 0px 0px 0px" width="100%" height="100%"/>';  
	}else
	{
	  echo'<iframe src="http://tsiserver.us/backup/" style="margin: 0px 0px 0px 0px" width="100%" height="100%"/>';  
	}
?>
</body>
